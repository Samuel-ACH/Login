<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equivs="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../EstilosLogin/css/EstilosPin.css">
    <title>Verificacion 2AF</title>
</head>
<body>
    <main>
        <div>
        <?php  if(isset($error)) { echo "<p>$error</p>"; }
       include('../Controladores/verificarOTP.php');?>
        <form action="../Controladores/verificarOTP.php" method="POST" class="OTP">
        <label for="codigo_otp">Ingrese el código OTP recibido por correo electrónico:</label><br>
                <div class="input-wrapper">
                <input type="text" id="codigo_otp" name="codigo_otp" required><br>
                    <img class="input-icon" src="../../Imagenes/password.svg" alt="">
                </div>
                <input class="btn" type="submit" name="register" value="Enviar">
                
            </form>
        </div>
    </main>
</body>
</html>