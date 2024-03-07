<?php
require_once("../Conexion_be.php");
require_once("./Recoverycontroller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Verificar si las contraseñas coinciden
    if ($_POST['password2'] === $_POST['password3']) {
        // Obtener la nueva contraseña
        $nueva_contrasena = password_hash($_POST['password3'], PASSWORD_DEFAULT);

        // Obtener el correo del usuario de la sesión
        $correo_usuario = $_SESSION['correo3']; // Asegúrate de establecer este valor cuando el usuario inicie sesión

        // Realizar la actualización de la contraseña en la base de datos
        $consulta = "UPDATE tbl_ms_usuario SET Contrasena = ? WHERE Correo = ?";
        $stmt = mysqli_prepare($conexion, $consulta);

        if ($stmt) {
            // Vincular los parámetros
            mysqli_stmt_bind_param($stmt, "ss", $nueva_contrasena, $correo_usuario);

            // Ejecutar la consulta
            $resultado = mysqli_stmt_execute($stmt);

            if ($resultado) {
                // Redirigir al usuario a la página de inicio de sesión u otra página
                echo "Contraseña actualizada con éxito";
                header("Location: ../../Vistas/Index.php");
                exit();
            } else {
                echo "Error al actualizar la contraseña. Por favor, inténtalo de nuevo.";
            }
        } else {
            echo "Error en la preparación de la consulta.";
        }
    } else {
        echo "Las contraseñas no coinciden.";
    }
}
?>

<!-- ?php

require_once("../Conexion_be.php");
require_once("./Recoverycontroller.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Verificar si las contraseñas coinciden
        
        // Obtener la nueva contraseña
        $nueva_contrasena = md5($_POST['password3']);
        
        // Obtener el correo del usuario de la sesión
        $correo_usuario = $_SESSION['correo3']; // Asegúrate de establecer este valor cuando el usuario inicie sesión
        
        // Realizar la actualización de la contraseña en la base de datos
        // Aquí debes tener tu conexión a la base de datos y realizar la consulta SQL para actualizar la contraseña
        // Reemplaza 'tu_tabla' por el nombre real de tu tabla de usuarios y 'campo_correo' por el nombre real del campo que contiene los correos electrónicos en tu tabla
        $consulta = "UPDATE tbl_ms_usuario SET Contrasena = '$nueva_contrasena' WHERE Correo = '$correo_usuario'";
        
        // Ejecutar la consulta
        $resultado = mysqli_query($conexion, $consulta); 
        
        // Verificar si la actualización fue exitosa
        if ($resultado) {
            // Redirigir al usuario a la página de inicio de sesión u otra página
            echo"Contraseña actualizada con exito";
            header("Location: ../../Vistas/Index.php");
            exit();
        } else {
            echo "Error al actualizar la contraseña. Por favor, inténtalo de nuevo.";
        }
    }
?> -->