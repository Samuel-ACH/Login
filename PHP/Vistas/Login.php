<!DOCTYPE html>
<html lang="en">
<head>
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
                        <input type="text" placeholder="Corre" name="correo">
                        <input type="password" placeholder="Contraseña" name="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../Controladores/Registro_Usuario_be.php" method="POST" class="formulario__register">
                        <h2>Regístrate</h2>
                        <label>Selecciona una opción</label>
                        <select type="text" name="tipodni" placeholder="TIPODNI">
                              <option value="Identidad" selected>Identidad</option>
                             <option value="Pasaporte">Pasaporte</option>
                             <option value="Identidad Extranjera">Identidad Extranjera</option>
                        </select>

                        <input type="int" placeholder="DNI" name="dni">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="email" placeholder="Correo" name="correo">
                        <input type="text" placeholder="Nombre y Apellido" name="nombre">
                        <input type="text" placeholder="Direccion" name="direccion">
                        <input type="text" placeholder="Fecha de Nacimiento" name="fechanacimiento">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <input type="text" placeholder="Genero" name="genero">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="../../EstilosLogin/js/script.js"></script>
</body>
</html>