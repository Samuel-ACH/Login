<?php

session_start(); // El sistema comienza a trabajar en base a sesiones.

// Archivo de conexión a la base de datos
include('Conexion_be.php');

// Capturar valores ingresados en la vista de usuario
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$clave_encriptada = md5($clave);

// Validar que los datos son correctos en el inicio de sesión
$consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo' AND Contrasena = '$clave_encriptada'";
$verificar_login = mysqli_query($conexion, $consultar_Login);

if(mysqli_num_rows($verificar_login) > 0) {
    $_SESSION['usuario'] = $correo; // Almacena el usuario/correo que inició sesión en el sistema.
    header("location: ../Vistas/Main.php");
    exit();
}else{
    echo'
            <script>
                alert("El usuario no existe, por favor verifique los datos introducidos.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
        exit();
}

    // if ( !empty($_POST["btn_ingresar"])) {
    //     if (empty($_POST["Username"]) and empty($_POST["Password"])) {
    //         echo "LOS CAMPOS ESTÁN VACÍOS";
    //     }else{

    //     }
    // }
?>;