<?php
session_start();
require_once 'GenerarOTP.php';
// Verificar si se ha enviado el formulario con el código OTP
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['codigo_otp'])) {
    // Obtener el código OTP enviado por el usuario
    $codigo_otp_ingresado = $_POST['codigo_otp'];

    // Obtener el código OTP almacenado en la sesión
    $codigo_otp_correcto = $_SESSION['otp'];

    // Validar el código OTP ingresado por el usuario
    if ($codigo_otp_ingresado == $codigo_otp_correcto) {
        // El código OTP es correcto, iniciar sesión
        $_SESSION['autenticado'] = true; // Indicar que el usuario está autenticado
        header("location: /PHP/Vistas/Main.php"); // Redirigir al usuario a la página principal
        exit();
    } else {
        // El código OTP es incorrecto, mostrar mensaje de error
        $_SESSION['error'] = "Codigo OTP Incorrecto";
        header("location: /PHP/Vistas/Pin.php"); // Redirigir a la página de verificación de pin
    }
}
?>;