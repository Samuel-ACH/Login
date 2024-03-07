<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../EstilosLogin/css/EstilosPin.css">
    <title>Recuperar Contraseña</title>
    <link rel="shortcut icon" href="../../../EstilosLogin/images/pestana.png" type="image/x-icon">
</head>
<body>
    <main>
        <div>
            <?php 
            // Verificar si existe un mensaje de error en la sesión
            // if(isset($_SESSION['error'])) { 
            //     echo "<p>{$_SESSION['error']}</p>"; // Mostrar el mensaje de error
            //     unset($_SESSION['error']); // Limpiar el mensaje de error de la sesión después de mostrarlo
            // } 
            include("../../Controladores/recuperarcontra/ValidarOTPcontra.php");
            ?>
            <form action="../../Controladores/recuperarcontra/ValidarOTPcontra.php" method="POST" class="OTP">
                <label for="codigo_otp2">Ingrese el código OTP recibido por correo electrónico:</label><br>
                <div class="input-wrapper">
                    <input type="text" id="codigo_otp2" name="codigo_otp2" required maxlength="6" autocomplete="off"><br>
                    <img class="input-icon" src="../../../Imagenes/password.svg" alt="Candado de contraseña">
                </div>
                <input class="btn" type="submit" name="register" value="Enviar">
                <a href="../Index.php">Regresar al Login</a>
            </form>
        </div>
    </main>
</body>
</html>
