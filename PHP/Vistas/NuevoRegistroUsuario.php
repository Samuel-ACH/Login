<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <!-- <link rel="stylesheet" href="../../EstilosLogin/css/estilos.css"> -->
</head>
<body>
<form action="../Controladores/nuevousuariocontroller.php" method="POST" class="formulario__register"
                    id="registerFormUser">
                    <h2>Registro de nuevo usuario</h2>
                    <!-- <label>Selecciona una opción</label>
                        <select type="int" name="tipodni" placeholder="TIPODNI">
                              <option value="1" selected>Identidad</option>
                             <option value="2">Pasaporte</option>
                             <option value="3">Identidad Extranjera</option>
                        </select>  -->

                    <!-- GRUPO DNI -->
                    <div class="formulario__grupo" id="grupo__dni">
                        <label for="dni" class="formulario__label">DNI</label>
                        <div class="formulario__grupo-input">
                            <input type="int" class="formulario__input" name="dni" id="dni" placeholder="DNI"
                                maxlength="13">
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO NOMBRE COMPLETO -->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombre Completo</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input mayuscula" name="nombre" id="nombre"
                                placeholder="Nombre completo" maxlength="80">
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO CORREO -->
                    <div class="formulario__grupo" id="grupo__correo2">
                        <label for="correo" class="formulario__label">Correo Electrónico</label>
                        <div class="formulario__grupo-input">
                            <input type="email" class="formulario__input" name="correo2" id="correo2"
                                placeholder="usuario@dominio.com" maxlength="40">
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO USUARIO -->
                    <div class="formulario__grupo" id="grupo__usuario">
                        <label for="usuario" class="formulario__label">Usuario</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input mayuscula" name="usuario" id="usuario"
                                placeholder="Usuario" maxlength="15">
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO CONTRASEÑA -->
                    <div class="formulario__grupo" id="grupo__password2">
                        <label for="password2" class="formulario__label">Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password2" id="password2"
                                placeholder="Contraseña" maxlength="30">
                            <i class="ver_password fas fa-eye"></i>
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>
                    <!-- GRUPO CONFIRMACION CONTRASEÑA -->
                    <div class="formulario__grupo" id="grupo__password3">
                        <label for="password3" class="formulario__label">Confirmar Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password3" id="password3"
                                placeholder="Confirmar contraseña" maxlength="30">
                            <i class="ver_password fas fa-eye"></i>
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO DIRECCION -->
                    <div class="formulario__grupo" id="grupo__direccion">
                    <label for="direccion" class="formulario__label">DIRECCION</label>
                    <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="direccion" maxlength="80">
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO FECHA NACIMIENTO -->
                    <div class="formulario__grupo" id="grupo__fecha">
                        <label for="fechanacimiento" class="formulario__label">Fecha de Nacimiento:</label>
                        <input type="date" placeholder="Fecha de Nacimiento" name="fechanacimiento" id="fechanacimiento"
                         class="fecha-nacimiento-input">
                        <p id="mensajeFechaNacimiento" class="mensaje_error" style="color: red;"></p>
                    </div>

                    <!-- GRUPO GENERO -->
                    <div class="gender-options">
                        <label for="genero" class="formulario__label">Género</label>
                        <div></div>
                        <select type="int" name="genero" id="genero" placeholder="Genero" class="combobox">>
                            <option value="0" selected>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>

                    <!-- GRUPO FECHA CONTRATACION -->
                    <div class="formulario__grupo" id="grupo__fecha">
                        <label for="fechacontratacion" class="formulario__label">Fecha de Nacimiento:</label>
                        <input type="date" placeholder="Fecha de Nacimiento" name="fechacontratacion" id="fechacontratacion"
                         class="fecha-nacimiento-input">
                        <p id="mensajeFechaContratacion" class="mensaje_error" style="color: red;"></p>
                    </div>

                    <!-- GRUPO ROL -->
                    <div class="gender-options">
                        <label for="rol" class="formulario__label">Rol</label>
                        <div></div>
                        <select type="int" name="rol" id="rol" placeholder="rol" class="combobox">>
                            <option value="0" selected>Seleccione</option>
                            <option value="1">Administrador</option>
                            <option value="2">Defecto</option>
                        </select>
                    </div>

                    <!-- GRUPO ESTADO USUARIO -->
                    <div class="gender-options">
                        <label for="estadoUser" class="formulario__label">Género</label>
                        <div></div>
                        <select type="int" name="estadoUser" id="estadoUser" placeholder="estadoUser" class="combobox">>
                            <option value="0" selected>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>
                    <!-- Botón entrar -->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn" id="btn_registrar">Guadar</button>
                    </div>
                </form>

                <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script type="module" src="../javascript/validacionNuevoUsuario.js"></script>
</body>
</html>