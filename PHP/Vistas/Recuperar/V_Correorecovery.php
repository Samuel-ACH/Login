<?php
session_start();
// Si ya existe una sesión autenticada, redirigir al usuario a la página principal
// if (isset($_SESSION['autenticado']) && $_SESSION['correo'] === true) {
//     header("Location: Main.php");
//     exit();
// }
// Incluir el script verificarOTP.php
include('../../Controladores/recuperarcontra/EnviarOTPcontra.php');
include("../../Controladores/Conexion_be.php");
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
            <form action="../../Controladores/recuperarcontra/Recoverycontroller.php" method="POST" class="OTP">
                <label for="codigo_otp">Recuperar Contraseña</label><br>
                <div class="" id="">
                        <label for="correo3">Ingrese su Correo Electrónico:</label>
                        <div class="">
                            <input type="email" class="" name="correo3" id="correo3"
                                placeholder="usuario@dominio.com" maxlength="40" >
                            <i class=""></i>
                        </div>
                        <p class=""></p>
                    </div>
                <input class="btn" type="submit" name="register" value="Enviar">
                <a href="../Index.php">Regresar al Login</a>

            </form>
        </div>
    </main>
</body>
</html>