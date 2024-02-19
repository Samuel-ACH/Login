<?php

session_start();
include('Conexion_be.php');
include('../../Recursos/SweetAlerts.php');

$correo = $_POST['correo'];
$clave = $_POST['password'];
$clave_encriptada = md5($clave);

if (!empty($correo) && !empty($clave_encriptada)) { // Validar que el correo y contraseña no estén vacíos.
    $consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo' AND Contrasena = '$clave_encriptada'";
    $verificar_login = mysqli_query($conexion, $consultar_Login); // Validar que existe una conexión a la BD y se realiza una consulta

    if (mysqli_num_rows($verificar_login) > 0) { // Validar que existe el registro en la base de datos para iniciar sesión
        $_SESSION['correo'] = $correo;  // Almacena el usuario/correo que inició sesión en el sistema.
        header("location: ../Vistas/Main.php"); // Redirecciona al usuario a la página principal
        exit();
    } else {
        echo '
            <script>
                MostrarAlerta("success", "ERROR", "Datos de inicio de sesión incorrectos.", "../Vistas/Index.php");
            </script>
        ';
        exit();
    }
} else {
    echo '
        <script>
            MostrarAlerta("error", "ERROR", "Los campos están vacíos.", "../Vistas/Index.php");
        </script>
    ';
    exit();
}
?>
