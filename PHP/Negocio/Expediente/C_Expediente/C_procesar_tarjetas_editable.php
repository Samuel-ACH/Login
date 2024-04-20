<?php
session_start();
if (isset($_SESSION['Detalle_Terapia'])) {
    // $Id_Detalle_Terapia = $_SESSION['Detalle_Terapia'];
} else {
    unset($_SESSION['Detalle_Terapia']);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Id_Detalle_Terapia = $_SESSION['Detalle_Terapia'];
    // Obtener los datos del cuerpo de la solicitud POST
    $datos_json = file_get_contents("php://input");

    // Decodificar los datos JSON en un array asociativo
    $datos = json_decode($datos_json, true);

    if (!empty($datos) && is_array($datos)) {
        // Conexión a la base de datos
        include('../../../Controladores/Conexion/Conexion_be.php');

        // Iniciar una transacción para garantizar la integridad de los datos
        $conexion->begin_transaction();

        try {
            // Preparar la consulta de actualización una sola vez
            $sql = "UPDATE tbl_detalle_terapia_tratamiento
                    SET Resultado = ?
                    WHERE Id_Detalle_Terapia = ? AND Id_Tipo_Terapia = ?";

            $stmt = $conexion->prepare($sql);

            if (!$stmt) {
                throw new Exception("Error al preparar la consulta: " . $conexion->error);
            }

            // Iterar sobre los datos recibidos y realizar la actualización
            foreach ($datos as $id => $resultado) {
                // Verificar si el resultado no está vacío y es una cadena de texto
                if (!empty($resultado) && is_string($resultado)) {
                    // Escapar los datos para prevenir inyecciones SQL
                    $id_terapia = intval($id);
                    $resultado_escaped = $conexion->real_escape_string($resultado);

                    // Enlazar los parámetros a la consulta
                    $stmt->bind_param("sii", $resultado_escaped, $Id_Detalle_Terapia, $id_terapia);

                    // Ejecutar la consulta de actualización
                    $stmt->execute();

                    // Verificar si la consulta afectó alguna fila
                    if ($stmt->affected_rows === 0) {
                        throw new Exception("No se realizó la actualización para Id: $id_terapia. Verifica si los datos ingresados son correctos.");
                    }
                } else {
                    // Datos no válidos
                    throw new Exception("Error: Datos no válidos para Id: $id.");
                }
            }

            // Confirmar la transacción si todo ha ido bien
            $conexion->commit();
            echo "Datos actualizados correctamente.";
        } catch (Exception $e) {
            // Si ocurre algún error, revertir la transacción
            $conexion->rollback();
            echo "Error: " . $e->getMessage();
        }

        // Cerrar la consulta preparada y la conexión a la base de datos
        $stmt->close();
        $conexion->close();
    } else {
        // No se recibieron datos válidos
        echo "Error: No se recibieron datos válidos.";
    }
} else {
    // La solicitud no es de tipo POST
    echo "Error: La solicitud debe ser de tipo POST.";
}
