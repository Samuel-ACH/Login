<?php

session_start();
include('Conexion_be.php');
include('../../Recursos/SweetAlerts.php');
include('../../Seguridad/Roles.php');

require_once('EnvioOTP/EnviarOTP.php');
// require_once('Captcha.php');

$correo = $_POST['correo'];
$clave = $_POST['password'];
$clave_encriptada = md5($clave);

if (!empty($correo) && !empty($clave_encriptada)) { // Validar que el correo y contraseña no estén vacíos.
    // $consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo' AND Contrasena = '$clave_encriptada'";
    $consultar_Login = "SELECT estU.Descripcion, u.Correo, u.Contrasena, u.Usuario, u.Nombre, r.Rol FROM tbl_estado_usuario AS estU INNER JOIN tbl_ms_usuario AS u ON estU.Id_Estado = u.Estado_Usuario
                        INNER JOIN tbl_ms_roles AS r ON u.IdRol = r.Id_Rol
                        WHERE estU.Id_Estado = 1 AND u.Correo = '$correo' AND u.Contrasena = '$clave_encriptada'";
                        
    $verificar_login = mysqli_query($conexion, $consultar_Login); // Validar que existe una conexión a la BD y se realiza una consulta
    $fila = $verificar_login->fetch_assoc();
    
    if (mysqli_num_rows($verificar_login) > 0) { // Validar que existe el registro en la base de datos para iniciar sesión
        $_SESSION['correo'] = $correo;  // Almacena el usuario/correo que inició sesión en el sistema.
        $_SESSION['rol'] = $fila['Rol'];
        $_SESSION['usuario'] = $fila['Usuario'];
        $_SESSION['nombre'] = $fila['Nombre'];
       //comentar la linea de abajo y descomentar el header y el Exit de Main para desactivar el OTP
        enviarOTP($conexion, $correo);
        //header("location: ../Vistas/Main.php"); // Redirecciona al usuario a la página principal
        // exit();
    } else {
        $mensajeError = "Correo o contraseña incorrectos.";
    }
} else {
    $mensajeError = "Los campos están vacíos.";
}

if (!empty($mensajeError)) {
    header("location: ../Vistas/Index.php?error=" . urlencode($mensajeError));
    exit();
}
?>
