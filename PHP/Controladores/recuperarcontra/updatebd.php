<?php
include '../Conexion_be.php';
require_once './Recoverycontroller.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password2 = $_POST['password2'];
    $password3 = $_POST['password3'];
    $correo = $_SESSION['correo3'] ; // Asegúrate de que este campo exista en tu formulario y se envíe correctamente

    // Verificar que las contraseñas coincidan
    if ($password2 !== $password3) {
        // Las contraseñas no coinciden, manejar el error aquí
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Encriptar la contraseña antes de almacenarla en la base de datos
    $hashed_password = md5($password3, PASSWORD_DEFAULT);

    // Preparar la consulta SQL usando sentencias preparadas para evitar inyección SQL
    $actualizarUsuarioQuery2 = "UPDATE tbl_ms_usuario SET Contrasena = ? WHERE Correo = ?";
    $stmt = mysqli_prepare($conexion, $actualizarUsuarioQuery2);

    // "ss" indica que ambos parámetros son cadenas (string)
    mysqli_stmt_bind_param($stmt, "ss", $hashed_password, $correo);

    if (mysqli_stmt_execute($stmt)) {
         // Mensaje de éxito
         $mensajeExito = "¡Los cambios se han guardado exitosamente!";
        
        // Redireccionar a la página principal o mostrar un mensaje de éxito
        header("Location: ../../Vistas/Index.php");
        exit();
    } else {
        echo "Error al guardar los cambios: " . mysqli_error($conexion);
    }

    mysqli_stmt_close($stmt);
}
?>
