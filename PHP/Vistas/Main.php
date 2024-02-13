<?php

// Valida que el usuario debe iniciar sesión forzosamente para acceder al sistema
session_start();

if (!isset($_SESSION["correo"])){
    echo'
            <script>
                alert("Por favor, debes iniciar sesión.")
                window.location = "Login.php";
            </script>
        ';
        session_destroy(); // Destruye la sesión
        die(); // el código se detiene en esta línea 
        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <h1>Bienvenido a Clínica RED</h1>
    <?php
    echo $_SESSION['correo'];
    ?>
    <p><a href="../Controladores/Logout.php">Cerrar Sesión</a></p>
</body>
</html>