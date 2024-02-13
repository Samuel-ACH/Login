<?php

session_start(); // El sistema comienza a trabajar en base a sesiones.

// Archivo de conexión a la base de datos
include('Conexion_be.php');

// Capturar valores ingresados en la vista de usuario
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$clave_encriptada = md5($clave);

if(!empty($correo) AND !empty($clave_encriptada)){ // Validar que el correo y contraseña no estén vacíos.
    $consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo' AND Contrasena = '$clave_encriptada'";
    $verificar_login = mysqli_query($conexion, $consultar_Login); // Validar que existe una conexión a la BD y se realiza una consulta
    if(mysqli_num_rows($verificar_login) > 0) { // Validar que existe el registro en la base de datos para iniciar sesión
        $_SESSION['correo'] = $correo; // Almacena el usuario/correo que inició sesión en el sistema.
        header("location: ../Vistas/Main.php"); // Inicio de sesión correcto
        exit();
    }else{
        echo'
            <script>
                alert("Datos de inicio de sesión incorrectos.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
        exit();
    }
}else{
    echo'
        <script>
            alert("Los campos están vacíos.")
            window.location = "../Vistas/Login.php";
        </script>
    ';
    exit();
}
?>