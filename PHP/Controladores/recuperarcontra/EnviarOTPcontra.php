<?php  
//session_start();
function enviarOTP2($conexion, $correo2) {
    require_once('../recuperarcontra/GenerarOTPcontra.php');
    require_once('../../PHPMailer/controllermail2.php');
    require_once('../Conexion_be.php');
    // Iniciar sesión si no está iniciada

$otp2 = generarCodigoOTP2(); // Generar OTP
// Almacenar OTP en la sesión
$_SESSION['otp2'] = $otp2;
// Actualizar código OTP y fecha de expiración en la base de datos
$update_codigo_otp = "UPDATE tbl_ms_usuario SET CodigoOTP = '$otp2', FechaExpiracionOTP = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE Correo = '$correo2'";
$resultado_update = mysqli_query($conexion, $update_codigo_otp);  
if ($resultado_update) {
    header("location: ../../Vistas/Recuperar/V_verificarOTP.php"); // Redirigir a la página de verificación de pin
      // Enviar correo electrónico con el OTP
      enviarCorreo2($correo2, $otp2);
    
} else {
    echo '<script>alert("Error al actualizar el código OTP en la base de datos.");</script>';
}
}
?>
