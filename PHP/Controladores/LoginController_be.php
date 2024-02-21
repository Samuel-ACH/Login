<?php
session_start();
include('../Controladores/Conexion_be.php');
include('../../Recursos/SweetAlerts.php');
require_once('../Controladores/GenerarOTP.php'); // Utiliza require_once en lugar de require
include('../PHPMailer/controllermail.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $clave = $_POST['password'];
    $clave_encriptada = md5($clave);

    if (!empty($correo) && !empty($clave_encriptada)) {
        $consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo' AND Contrasena = '$clave_encriptada'";
        $verificar_login = mysqli_query($conexion, $consultar_Login);

        if (mysqli_num_rows($verificar_login) > 0) {
            $otp = generarCodigoOTP(); // Generar OTP

            // Almacenar OTP en la sesión
            $_SESSION['otp'] = $otp;

            // Actualizar código OTP y fecha de expiración en la base de datos
            $update_codigo_otp = "UPDATE tbl_ms_usuario SET CodigoOTP = '$otp', FechaExpiracionOTP = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE Correo = '$correo'";
            $resultado_update = mysqli_query($conexion, $update_codigo_otp);

            if ($resultado_update) {
                // Enviar correo electrónico con el OTP
                enviarCorreoOTP($correo, $otp);

                // Redirigir a la página de verificación OTP
                header("location: ../Vistas/Pin.php");
                exit();
            } else {
                echo '<script>alert("Error al actualizar el código OTP en la base de datos.");</script>';
            }
        } else {
            echo '<script>alert("Datos de inicio de sesión incorrectos."); window.location = "../Vistas/Index.php";</script>';
            exit();
        }
    } else {
        echo '<script>alert("Los campos están vacíos."); window.location = "../Vistas/Index.php";</script>';
        exit();
    }
}
?>

// session_start();
// include('Conexion_be.php');
// include('../../Recursos/SweetAlerts.php');
// $correo = $_POST['correo'];
// $clave = $_POST['password'];
// $clave_encriptada = md5($clave);

// if (!empty($correo) && !empty($clave_encriptada)) { // Validar que el correo y contraseña no estén vacíos.
//     $consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo' AND Contrasena = '$clave_encriptada'";
//     $verificar_login = mysqli_query($conexion, $consultar_Login); // Validar que existe una conexión a la BD y se realiza una consulta

//     if (mysqli_num_rows($verificar_login) > 0) { // Validar que existe el registro en la base de datos para iniciar sesión
//         $codigo_otp = generarCodigoOTP();
//         $_SESSION['correo'] = $correo;  // Almacena el usuario/correo que inició sesión en el sistema.
     
//         $_SESSION['codigo_otp'] = $codigo_otp;

//         $update_codigo_otp = "UPDATE tbl_ms_usuario SET CodigoOTP = '$codigo_otp', FechaExpiracionOTP = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE Correo = '$correo'";
//         $resultado_update = mysqli_query($conexion, $update_codigo_otp);

//       //  header("location: ../Vistas/Main.php"); // Redirecciona al usuario a la página principal
       
//         if ($resultado_update) {
//             enviarCorreoOTP($correo, $codigo_otp);
//             header("location: ../../Vistas/Pin.php");
//             exit();
//         } else {
//             echo '<script>alert("Error al actualizar el código OTP en la base de datos.");</script>';
//         }
//     } else {
//         echo '<script>alert("Datos de inicio de sesión incorrectos."); window.location = "../Vistas/Index.php";</script>';
//         exit();
//     }
// } else {
//     echo '<script>alert("Los campos están vacíos."); window.location = "../Vistas/Index.php";</script>';
//     exit();
// }

