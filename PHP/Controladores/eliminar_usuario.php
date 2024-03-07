<?php
include 'Conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si el parámetro 'id' está presente en la solicitud POST
    if (isset($_POST["id"])) {
        $idUsuario = $_POST["id"];

        // Validar el ID del usuario
        if (!is_numeric($idUsuario) || $idUsuario <= 0) {
            echo "ID de usuario no válido";
            exit; // Salir del script si el ID no es válido
        }

        // Prepara la consulta para eliminar el usuario
        $eliminarUsuarioQuery = "DELETE FROM tbl_ms_usuario WHERE Id_Usuario = ?";

        try {
            // Prepara la declaración
            $stmt = mysqli_prepare($conexion, $eliminarUsuarioQuery);

            if (!$stmt) {
                throw new Exception("Error al preparar la consulta: " . mysqli_error($conexion));
            }

            // Vincula los parámetros
            mysqli_stmt_bind_param($stmt, "i", $idUsuario);

            // Ejecuta la declaración
            if (mysqli_stmt_execute($stmt)) {
                echo "Usuario eliminado exitosamente";
            } else {
                throw new Exception("Error al ejecutar la consulta: " . mysqli_error($conexion));
            }

            // Cierra la declaración
            mysqli_stmt_close($stmt);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } else {
        echo "ID de usuario no proporcionado";
    }
} else {
    echo "Acceso no permitido";
}
?>
