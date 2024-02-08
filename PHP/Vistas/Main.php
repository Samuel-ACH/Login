<?php

session_start();

if (!isset($_SESSION["usuario"])){
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
</body>
</html>