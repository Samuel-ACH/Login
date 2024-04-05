<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del cuerpo de la solicitud POST
    $datos_json = file_get_contents("php://input");

    // Decodificar los datos JSON en un array asociativo
    $datos = json_decode($datos_json, true);

    if (!empty($datos)) {
        include('../../../Controladores/Conexion/Conexion_be.php');

        foreach ($datos as $id => $resultado) {
            // Verificar si el resultado no está vacío
            if (!empty($resultado)) {
                // Preparar la consulta SQL
                $sql = "INSERT INTO tbl_detalle_terapia_tratamiento (Id_Detalle_Terapia, Id_Tipo_Terapia, Resultado) VALUES (1, ?, ?)";
                $stmt = $conexion->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("is", $id, $resultado);
                    $stmt->execute();

                    if ($stmt->affected_rows > 0) {
                        // Los datos se insertaron correctamente
                        echo "Los datos se insertaron correctamente.";
                    } else {
                        // Error al insertar los datos
                        echo "Error al insertar los datos: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    // Error al preparar la consulta
                    echo "Error al preparar la consulta: " . $conexion->error;
                }
            }
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    } else {
        // No se recibieron datos válidos
        echo "No se recibieron datos válidos.";
    }
} else {
    // La solicitud no es de tipo POST
    echo "La solicitud debe ser de tipo POST.";
}
?>
