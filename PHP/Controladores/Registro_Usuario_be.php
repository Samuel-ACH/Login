<?php

// Acceso de conexion a la base de datos
include 'Conexion_be.php';

// capturar los valores de formulario de registro
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['email'];
$usuario = $_POST['user'];
$clave = $_POST['password'];

// Query para insertar los datos en la tabla de la base de datos
$query = "INSERT INTO usuario(Nombre_Completo, Correo, Usuario, Clave) 
          VALUES ('$nombre_completo', '$correo', '$usuario', '$clave')";

// Consulta a la BD para verificar la existencia de un correo o usuario
$consultar_Email = "SELECT * FROM usuario WHERE Correo = '$correo' ";
$consultar_User = "SELECT * FROM usuario WHERE Usuario = '$usuario' ";

// Validar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, $consultar_Email);
if(mysqli_num_rows($verificar_correo) > 0){
    echo'
            <script>
                alert("Este correo electrónico ya está registrado, intenta con otro correo electrónico diferente.")
                window.location = "../Vistas/Login.php";
                </script>
        ';
        exit();
}

// Validar que el correo no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, $consultar_User);
if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
            <script>
                alert("El nombre de usuario ya está registrado, intenta con un nuevo nombre de usuario.")
                window.location = "../Vistas/Login.php";
                </script>
        ';
        exit();
}

// Variable para ejecutar el query de insertar registro
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo'
            <script>
                alert("Usuario almacenado correctamente.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}else{
    echo'
            <script>
                alert("Intentalo de nuevo, usuario no almacenado.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}

// Cerrar conexión
mysqli_close($conexion);
?>;