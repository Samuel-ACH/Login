<?php
// Incluye el archivo de conexión a la base de datos
include '../../../Controladores/Conexion/Conexion_be.php';
include('../../../Controladores/bitacora.php');
session_start();

// Verifica si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica si se proporcionó el ID de paciente
    if (isset($_POST["id"])) {
        // Sanitiza el ID de paciente para evitar inyección de SQL
        $idPaciente = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        // Valida el ID del paciente
        if ($idPaciente === false || $idPaciente <= 0) {
            echo "ID de paciente no válido";
            exit; // Sale del script si el ID no es válido
        }

        // Actualiza el estado del paciente en la base de datos
        $estado = 1; // Estado activo
        $habilitarPacienteQuery = "UPDATE tbl_paciente SET Estado_Paciente = ? WHERE Id_Paciente = ?";
        $stmt = mysqli_prepare($conexion, $habilitarPacienteQuery);
        // Verifica si la consulta se preparó correctamente
        if ($stmt) {
            // Vincula los parámetros y ejecuta la consulta
            mysqli_stmt_bind_param($stmt, "ii", $estado, $idPaciente);
            if (mysqli_stmt_execute($stmt)) {
                $n=$_SESSION['id_D'];          //obtiene valor de la variable session
                $a='HABILITAR';
                $d='PACIENTE CON EL ID '. $idPaciente .' HA SIDO HABILITADO';
                bitacora($n, $a, $d);
                echo "El paciente ha sido habilitado exitosamente";
            } else {
                echo "Error al habilitar al paciente: " . mysqli_error($conexion);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error al preparar la consulta: " . mysqli_error($conexion);
        }
    } else {
        echo "ID de paciente no proporcionado";
    }
} else {
    echo "Acceso denegado";
}
?>