<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
function enviarCorreoOTP($destinatario, $codigo_otp) {
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'redelectrodiagnostico@gmail.com';                     //SMTP username
    $mail->Password   = 'neaafkydjwicywfx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  // Configurar remitente y destinatario
  $mail->setFrom('tu_correo@example.com', 'Nombre remitente'); // Cambia 'tu_correo@example.com' por tu correo electrónico
  $mail->addAddress($destinatario); // Agrega el destinatario
  
  // Contenido del correo
  $mail->isHTML(true);
  $mail->Subject = 'Código OTP para inicio de sesión';
  $mail->Body    = 'Su código OTP para iniciar sesión es: ' . $codigo_otp;

  // Enviar el correo
  $mail->send();
  return true;
} catch (Exception $e) {
  // Manejar errores
  return false;
}
}
?>