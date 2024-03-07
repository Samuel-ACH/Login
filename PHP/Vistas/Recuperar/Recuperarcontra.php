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
    <!-- <link rel="stylesheet" href="../../../EstilosLogin/css/estilos.css"> -->
    
    <link rel="stylesheet" href="../../../EstilosLogin/css/EstilosValidaciones.css">
    <link rel="stylesheet" href="../../../EstilosLogin/css/EstilosPin.css">
    <link rel="shortcut icon" href="../../../EstilosLogin/images/pestana.png" type="image/x-icon">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <main>
        <div>
            <?php if(isset($error)) { echo "<p>$error</p>";} ?>
            <form action="" method="POST" class="OTP" id="formCambiarClave" >
                <label for="password2"><strong>Ingresa tu nueva contraseña:</strong></label><br>
                <div class="input-wrapper">
                    <!-- <input type="text" id="correo" name="correo" required maxlength="40" autocomplete="off"><br>
                    -->
                          <!-- GRUPO CONTRASEÑA -->
                          <div class="formulario__grupo" id="grupo__password2">
                        <!-- <label for="password2" class="formulario__label">Contraseña</label> -->
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password2" id="password2" placeholder="Contraseña" maxlength="30">
                            <img class="input-icon" src="../../../Imagenes/password.svg" alt="">
                            <i class="ver_password fas fa-eye"></i>
                        </div>
                        <p class="formulario__input-error"></p>
                    </div><br>
                    <!-- GRUPO CONFIRMACION CONTRASEÑA -->
                    <div class="formulario__grupo" id="grupo__password3">
                        <!-- <label for="password3" class="formulario__label">Confirmar Contraseña</label> -->
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password3" id="password3"
                                placeholder="Confirmar contraseña" maxlength="30">
                                <img class="input-icon" src="../../../Imagenes/password.svg" alt="">
                            <i class="ver_password fas fa-eye"></i>
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>
                </div>
                <input class="btn" type="submit" name="register" value="Enviar"><br> 
                 <a href="../../Vistas/Index.php">Regresar al Login</a>
            </form>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script type="module"src="../../javascript/validacionCambiarClave.js"></script>
</body>
</html>