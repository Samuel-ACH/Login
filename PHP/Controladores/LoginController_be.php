<?php
//=================================

session_start();
include('../Controladores/Conexion/Conexion_be.php');
include('../../Recursos/SweetAlerts.php');
include('../../Seguridad/Roles.php');
//include('./bitacora.php');

require_once('../Seguridad/OTP/C_2AF/C_enviar_token_2af.php');
// require_once('Captcha.php');

$correo = $_POST['correo'];
$clave = $_POST['password'];
$clave_encriptada = md5($clave);

if (!empty($correo) && !empty($clave_encriptada)) { // Validar que el correo y contraseña no estén vacíos.
    $consultar_Login = "SELECT estU.Descripcion, u.Id_Usuario, u.Correo, u.Contrasena, u.Usuario, u.Nombre, r.Rol, u.primer_ingreso FROM tbl_estado_usuario AS estU INNER JOIN tbl_ms_usuario AS u ON estU.Id_Estado = u.Estado_Usuario
                        INNER JOIN tbl_ms_roles AS r ON u.IdRol = r.Id_Rol
                        WHERE estU.Id_Estado IN(1, 2) AND u.Correo = '$correo' AND u.Contrasena = '$clave_encriptada'";
                        
    $verificar_login = mysqli_query($conexion, $consultar_Login); // Validar que existe una conexión a la BD y se realiza una consulta
    $fila = $verificar_login->fetch_assoc();
    

if (mysqli_num_rows($verificar_login) > 0) {
    // Si no es el primer ingreso o si es el primer ingreso y se ha superado el captcha, proceder con el inicio de sesión.
    if ($fila['primer_ingreso'] != 0 || ($fila['primer_ingreso'] == 0 && isset($_POST['g-recaptcha-response']))) {
        if ($fila['primer_ingreso'] == 0) { // Si es primer ingreso, actualizar el campo primer_ingreso a 1
            // Verificar captcha solo si es el primer ingreso
            if (!isset($_POST['g-recaptcha-response'])) {
                $mensajeError = "Es necesario completar el captcha para el primer inicio de sesión.";
            } else {
                $captcha = $_POST['g-recaptcha-response'];
                $secret = '6LfmNZMpAAAAAGtglVeRgJ83DglCNBPQDnOimzMG';
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
                var_dump($response);
                $arr = json_decode($response, TRUE);
                
                if (!$arr['success']) {
                    $mensajeError = "Por favor verifica el captcha.";
                } else {
                    // Si no hay mensaje de error después de verificar el captcha, actualizar primer_ingreso a 1
                    $actualizar_primer_ingreso = "UPDATE tbl_ms_usuario SET primer_ingreso = 1, Primer_Inicio_Sesion = NOW(), Estado_Usuario = 1, IdRol = 3 WHERE Correo = '$correo'";
                    mysqli_query($conexion, $actualizar_primer_ingreso);
                }
            }
        }
        
        // Si no hay mensaje de error después de la verificación del captcha, proceder con el inicio de sesión
        if (empty($mensajeError)) {
            // Validar que existe el registro en la base de datos para iniciar sesión
            $_SESSION['correo'] = $correo;  // Almacena el usuario/correo que inició sesión en el sistema.
            $_SESSION['rol'] = $fila['Rol'];
            $_SESSION['usuario'] = $fila['Usuario'];
            $_SESSION['nombre'] = $fila['Nombre'];
            $_SESSION['id_D'] = $fila['Id_Usuario'];
            //comentar la linea de abajo y descomentar el header y el Exit de Main para desactivar el OTP
            //$fecha = date("Y-m-d H:i:s");
            // $n= $fila['Id_Usuario'];
            // $a='INICIO DE SESIÓN';
            // $d= $_SESSION['usuario']  .' INICIÓ SESIÓN';
            // bitacora($n,$a,$d);
             enviarOTP($conexion, $correo);
             header("location: ../Vistas/Main.php"); // Redirecciona al usuario a la página principal
             exit();
        }
    } else {
        $mensajeError = "Es necesario completar el captcha para el primer inicio de sesión.";
    }
} else {
    $mensajeError = "Correo o contraseña incorrectos.";
}

if (!empty($mensajeError)) {
    header("location: ../Vistas/Index.php?error=" . urlencode($mensajeError));
    exit();
}
}
?>
