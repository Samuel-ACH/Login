<?php
session_start();
// Si ya existe una sesión autenticada, redirigir al usuario a la página principal
if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
    header("Location: Main.php");
    exit();
}
// Incluir el script verificarOTP.php
include('../Controladores/verificarOTP.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equivs="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../EstilosLogin/css/EstilosPin.css">
    <title>Verificacion OTP</title>
    <link rel="shortcut icon" href="../../EstilosLogin/images/pestaña.png" type="image/x-icon">
</head>
<body>
    <main>
        <div>
            <?php if(isset($error)) { echo "<p>$error</p>";} ?>
            <form action="../Controladores/verificarOTP.php" method="POST" class="OTP">
                <label for="codigo_otp">Ingrese el código OTP recibido por correo electrónico:</label><br>
                <div class="input-wrapper">
                    <input type="password" id="codigo_otp" name="codigo_otp" required maxlength="6" autocomplete="off"><br>
                    <img class="input-icon" src="../../Imagenes/password.svg" alt="">
                </div>
                <input class="btn" type="submit" name="register" value="Enviar">
                <a href="Index.php">Regresar al Login</a>

            </form>
        </div>
    </main>
</body>
</html>