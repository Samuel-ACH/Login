<?php
session_start();

// Verificar si se ha enviado el formulario con el código OTP
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['codigo_otp2'])) {
    // Obtener el código OTP enviado por el usuario
    $codigo_otp_ingresado2 = $_POST['codigo_otp2'];

    // Obtener el código OTP almacenado en la sesión
    $codigo_otp_correcto2 = $_SESSION['otp2'];

    // Validar el código OTP ingresado por el usuario
    if ($codigo_otp_ingresado2 == $codigo_otp_correcto2) {
        // El código OTP es correcto, iniciar sesión
        $_SESSION['autenticado'] = true; // Indicar que el usuario está autenticado
        header("location: ../../Vistas/Recuperar/Recuperarcontra.php"); // Redirigir al usuario a recuperar la contraseña
        exit();
    } else {
        // El código OTP es incorrecto, almacenar mensaje de error en la sesión
        $_SESSION['error'] = "Código OTP incorrecto. Por favor, inténtalo de nuevo.";
        header("location: ../../Vistas/Recuperar/V_verificarOTP.php"); // Redirigir a la página de verificación de pin
        exit();
    }
}
?>