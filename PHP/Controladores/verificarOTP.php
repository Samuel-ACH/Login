<?php
session_start();

if (!isset($_SESSION['correo']) || !isset($_SESSION['codigo_otp'])) {
    header("location: index.php");
    exit();
}

if (isset($_POST['codigo_otp'])) {
    if ($_POST['codigo_otp'] === $_SESSION['codigo_otp']) {
        $_SESSION['autenticado'] = true;
        header("location: ../Vistas/Main.php");
        exit();
    } else {
        $error = "Código OTP incorrecto";
    }
}
// Función para generar un código OTP único
function generarCodigoOTP($length = 6) {
    $characters = '0123456789';
    $characters_length = strlen($characters);
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, $characters_length - 1)];
    }
    return $otp;
}

// Función para enviar un correo electrónico con el código OTP
function enviarCorreoOTP($destinatario, $codigo_otp) {
    // Configurar los parámetros del correo electrónico
    $para = $destinatario;
    $asunto = 'Código OTP para inicio de sesión';
    $mensaje = 'Su código OTP para iniciar sesión es: ' . $codigo_otp;
    $cabeceras = 'From: redelectrodiagnostico@gmail.com' . "\r\n" .
                 'Reply-To: redelectrodiagnostico@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    // Enviar el correo electrónico
    return mail($para, $asunto, $mensaje, $cabeceras);
}

?>