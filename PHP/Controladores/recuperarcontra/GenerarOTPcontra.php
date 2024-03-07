<?php
// Iniciar sesión (debe ir antes de cualquier salida al navegador)
//session_start();
// Función para generar un código OTP aleatorio
function generarCodigoOTP2() {
  $otp2 = random_int(100000, 999999);
  return $otp2;
}

$otp2 = generarCodigoOTP2();
  // Almacenar código OTP en la variable de sesión
  $_SESSION['otp2'] = $otp2;
  
// // Iniciar sesión
// if (isset($_POST['iniciar_sesion'])) {
//     $correo = $_POST['correo'];
//     $clave = $_POST['password'];
//     $clave_encriptada = md5($clave);
//   // Validar usuario y contraseña
//   // ...

//   // Generar código OTP
//   $otp = generarCodigoOTP();

//   // Enviar código OTP por correo electrónico
//   // ...

//   // Almacenar código OTP en la variable de sesión
//   $_SESSION['otp'] = $otp;
// }
?>
