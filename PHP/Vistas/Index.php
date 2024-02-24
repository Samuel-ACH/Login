<?php
// Sí existe una sesión iniciada, no permite regresar al login sin antes cerrar la sesión
//session_start();
if (isset($_SESSION["correo"])) {
    header("location: Main.php");
}
include('../Controladores/Conexion_be.php');
//include('../Controladores/LoginController_be.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica RED</title>
    <link rel="shortcut icon" href="../../EstilosLogin/images/pestaña.png" type="image/x-icon">
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
                <form action="../Controladores/LoginController_be.php" method="POST" class="formulario__login" id="formulario">
                <img src="../../EstilosLogin/images/logo.png" alt="Logo" class="logo">
                    <h2>Iniciar Sesión</h2>
                    <!-- <?php
                            include('../Controladores/Conexion_be.php');
                            // include('../Controladores/LoginController_be.php');
                            ?> -->

                    <!-- Grupo: Correo -->
                    <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Correo Electrónico</label>
                        <div class="formulario__grupo-input">
                            <input type="email" class="formulario__input" name="correo" id="correo" placeholder="usuario@dominio.com" maxlength="40">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El correo solo admite caracteres alfanuméricos, puntos, guiones y guion bajo.</p>
                    </div>

                    <!-- Grupo: Contraseña -->
                    <div class="formulario__grupo" id="grupo__password">
                        <label for="password" class="formulario__label">Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña" maxlength="30">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            <i class="ver_password fas fa-eye"></i>
                        </div>
                        <p class="formulario__input-error">La contraseña tiene que ser de 5 a 10 dígitos.</p>
                    </div>

                    <!-- Mensaje de advertencia -->
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Datos incorrectos.</p>
                    </div>

                    <!-- Botón entrar -->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn">Entrar</button>
                    </div>
                </form>

                <!--Register-->
                <form action="../Controladores/Registro_Usuario_be.php" method="POST" class="formulario__register">
                <img src="../../EstilosLogin/images/logo.png" alt="Logo" class="logo">
                    <h2>Regístrate</h2>
                    <!-- <label>Selecciona una opción</label>
                        <select type="int" name="tipodni" placeholder="TIPODNI">
                              <option value="1" selected>Identidad</option>
                             <option value="2">Pasaporte</option>
                             <option value="3">Identidad Extranjera</option>
                        </select>  -->

                    <input type="int" placeholder="DNI" name="dni" required maxlength="13">
                    <input type="text" placeholder="Usuario" name="usuario" required maxlength="15">
                    <input type="email" placeholder="Correo" name="correo" required maxlength="40">
                    <input type="text" placeholder="Nombre y Apellido" name="nombre" required maxlength="80">
                    <input type="text" placeholder="Direccion" name="direccion" required maxlength="80">
                    <label for="fechanacimiento" class="fecha-nacimiento-label">Fecha de Nacimiento:</label>
                    <input type="date" placeholder="Fecha de Nacimiento" name="fechanacimiento" required class="fecha-nacimiento-input">
                    <input type="password" placeholder="Clave" name="clave" required maxlength="30">
                    <div class="gender-options">
                        <label>Genero:</label>
                        <div></div>
                        <select type="int" name="genero" placeholder="Genero" required class="combobox">
                            <option value="0" selected></option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../../EstilosLogin/js/script.js"></script>
    <script src="../../EstilosLogin/js/Validaciones.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>