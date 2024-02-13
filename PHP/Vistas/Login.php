<?php

// Sí existe una sesión iniciada, no permite regresar al login sin antes cerrar la sesión
session_start();

if (isset($_SESSION["correo"])){
    header("location: Main.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../../Recursos/Bootstrap5/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../../EstilosLogin/css/estilos.css">
</head>
<body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Registrarme</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="../Controladores/LoginController_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <?php
                        include('../Controladores/Conexion_be.php');
                        include('../Controladores/LoginController_be.php');
                        ?>
                        <input type="text" placeholder="Correo" name="correo" required >
                        <input type="password" placeholder="Contraseña" name="clave" required >
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../Controladores/Registro_Usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrate</h2>
                        <!-- <label>Selecciona una opción</label>
                        <select type="int" name="tipodni" placeholder="TIPODNI">
                              <option value="1" selected>Identidad</option>
                             <option value="2">Pasaporte</option>
                             <option value="3">Identidad Extranjera</option>
                        </select>  -->

                        <input type="int" placeholder="DNI" name="dni" required>
                        <input type="text" placeholder="Usuario" name="usuario" required>
                        <input type="email" placeholder="Correo" name="correo" required>
                        <input type="text" placeholder="Nombre y Apellido" name="nombre" required>
                        <input type="text" placeholder="Direccion" name="direccion" required>
                        <input type="date" placeholder="Fecha de Nacimiento" name="fechanacimiento" required>
                        <input type="password" placeholder="Clave" name="clave" required>
                        <div class="gender-options">
                            <label>Genero</label>
                            <select type="int" name="genero" placeholder="Genero" required>
                            <option value="0" selected></option>
                              <option value="1" >Masculino</option>
                             <option value="2">Femenino</option>
                            </select>
                        </div>
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="../../EstilosLogin/js/script.js"></script>
        <script> src="../../Recursos/Bootstrap5/bootstrap.bundle.min.js" </script>
</body>
</html>