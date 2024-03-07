<?php
//session_start();
// // Si ya existe una sesión autenticada, redirigir al usuario a la página principal
// if (isset($_SESSION['autenticado']) && $_SESSION['correo'] === true) {
//     header("Location: Index.php");
//     exit();
// }
// // Incluir el script verificarOTP.php
//require_once('../../Controladores/recuperarcontra/ValidarOTPcontra.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equivs="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../EstilosLogin/css/EstilosPin.css">
    <title>Recuperar Contrasena</title>
    <link rel="shortcut icon" href="../../../EstilosLogin/images/pestana.png" type="image/x-icon">
</head>
<body>
    <main>
        <div>
            <?php if(isset($error)) { echo "<p>$error</p>";} ?>
            <form action="" method="POST" class="OTP">
           
                <input class="btn" type="submit" name="register" value="Enviar">
                <a href="../Index.php">Regresar al Login</a>

            </form>
        </div>
    </main>
</body>
</html>