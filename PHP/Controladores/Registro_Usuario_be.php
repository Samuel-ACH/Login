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

// Variable para ejecutar el query de insertar registro
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo'
            <script>
                alert("Usuario almacenado correctamente")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}else{
    echo'
            <script>
                alert("Intentalo de nuevo, usuario no almacenado")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}

// Cerrar conexión
mysqli_close($conexion);
?>;