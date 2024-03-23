<?php  
function enviarOTP($conexion, $correo) {
    // require_once('../../OTP/C_2AF/C_generar_token_2af.php');
    require_once '../C_2AF/C_generar_token_2af.php';
    require('../../../PHPMailer/C_correo_2af.php');
    
    $otp = generarCodigoOTP(); // Generar OTP
    // Almacenar OTP en la sesión
    $_SESSION['otp'] = $otp;
    // Actualizar código OTP y fecha de expiración en la base de datos
    $update_codigo_otp = "UPDATE tbl_ms_usuario SET CodigoOTP = '$otp', FechaExpiracionOTP = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE Correo = '$correo'";
    $resultado_update = mysqli_query($conexion, $update_codigo_otp);  
    if ($resultado_update) {
        // Enviar correo electrónico con el OTP
        enviarCorreo($correo, $otp);
        header("location: ../V_2AF/V_verificar_2af.php"); // Redirigir a la página de verificación de pin
        exit();
    } else {
        echo '<script>alert("Error al actualizar el código OTP en la base de datos.");</script>';
    }
}
?>