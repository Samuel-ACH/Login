<?php
session_start();
include('../PHPMailer/controllermail.php');
// Verificar si el usuario ha iniciado sesión y tiene un código OTP almacenado en la sesión
if(!isset($_SESSION['correo']) || !isset($_SESSION['otp'])) {
    // Si no, redirigir al usuario a la página de inicio de sesión
    header("location: ../Vistas/Index.php");
    exit();
}

// Verificar si se ha enviado un formulario con el código OTP
if(isset($_POST['otp'])) {
    // Verificar que el código ingresado coincida con el código almacenado en la sesión
    if($_POST['otp'] === $_SESSION['otp']) {
        // Si la verificación es exitosa, iniciar sesión
        $_SESSION['autenticado'] = true;
        header("location: ../Vistas/Main.php");
        exit();
    } else {
        // Si el código es incorrecto, mostrar un mensaje de error
        $error = "Código OTP incorrecto";
    }
}

?>