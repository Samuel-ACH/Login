<?php
require_once('../Controladores/Conexion/conexiondb.php');

if (isset($_POST["correo"])) {
    $correo = $_POST["correo"];

    // Ejecutar la consulta SQL
    $sql = "SELECT primer_ingreso FROM tbl_ms_usuario WHERE Correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->bind_result($NumeroSesion);
    $stmt->fetch();

    // Enviar la respuesta al usuario
    if ($NumeroSesion > 0) {
        // El Correo ya existe
        echo "Ocultar";
    } else {
        // El Correo no existe
        echo "Mostrar";
    }

    $stmt->close();
} else {
    // Si no se proporciona un Correo, devuelve un mensaje de error
    echo "error";
}

// Cerrar la conexión a la base de datos
$conn->close();