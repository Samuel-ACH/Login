<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ClínicaRED - Rehabilitación y Electrodiagnóstico </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/red-logo.jpeg" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
    $(document).ready(function() {
        $('#tablaAgenda').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            } //codigo para el lenguaje del archivo JSON
        });
          $('.editarBtn').click(function() {
                var idUsuario = $(this).data('id');
                // Redireccionar o hacer algo con el ID para editar
                window.location.href = 'editar_usuario.php?id=' + idUsuario;
            });

            // Manejar clic en botón Eliminar
            $('.eliminarBtn').click(function() {
                var idUsuario = $(this).data('id');
                // Realizar una solicitud AJAX para eliminar el usuario con el ID proporcionado
                // Puedes usar jQuery.ajax o Fetch API para esto
             $.ajax({
                    url: 'eliminar_usuario.php',
                    method: 'POST',
                    data: { id: idUsuario },
                    success: function(response) {
                //         // Actualizar la tabla o hacer algo después de eliminar
                //         // Puedes recargar la página o actualizar la tabla usando DataTables
                // Ejemplo de recargar la página:
                   location.reload();
                },
                error: function(error) {
                console.error("Error al eliminar usuario: " + error.responseText);
                }
                });
            });
       });
    </script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="../../assets/img/red-logo.jpeg" alt="">
                <span class="d-none d-lg-block">CLÍNICA RED</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../../assets/img/user.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Administrador</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">

                            <h6><?php
                  echo $_SESSION['correo'];
                  ?>
                            </h6>
                            <span>Rol</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../Controladores/Logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Cerrar Sesión</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Pacientes</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>

                        <a href="components-alerts.php">

                            <i class="bi bi-circle"></i><span>Gestion Paciente</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Registrar </span>
                        </a>
                    </li>


                </ul>
            </li><!-- Fin modulo paciente -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Citas</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Gestion Cita</span>
                        </a>
                </ul>
            </li><!-- Fin modulo citas -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Expediente</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i><span>Gestion Expediente</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Historial Expediente</span>
                        </a>
                    </li>
                </ul>
            </li><!-- Fin modulo expediente -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-tools"></i><span>Mantenimiento</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="Usuario.php">
                            <i class="bi bi-circle"></i><span>Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>Permisos</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Roles</span>
                        </a>
                    </li>
                    <li>
                        <!-- Enlace al formulario de bitácora -->
                        <a href="Bitacora.php">
                            <i class="bi bi-circle"></i><span>Bitacora</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Objetos</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Parametros</span>
                        </a>
                    </li>
                </ul>
            </li><!-- Fin modulo  Mantenimiento -->


        </ul>

    </aside><!-- End Sidebar-->

    <?php
    include 'Conexion_be.php';
    ?>

    <style>

.formulario {
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 20px;
}

.formulario__grupo {
    margin-bottom: 10px; /* Espacio entre los grupos de campos */
}

.formulario__label {
    display: block;
    font-weight: 700;
    margin-bottom: -20px; /* Espacio entre el label y el input */
}

.formulario__grupo-input {
	position: relative;
}

.formulario__input {
	width: 100%;
	background: #fff;
	border: 3px solid transparent;
	border-radius: 3px;
	height: 45px;
	line-height: 45px;
	padding: 0 40px 0 10px;
	transition: .3s ease all;
}


.formulario__input:focus {
	border: 3px solid #0075FF;
	outline: none;
	box-shadow: 3px 0px 30px rgba(163,163,163, 0.4);
}

.formulario__input-error {
	font-size: 12px;
	margin-bottom: 0;
	display: none;
}
.formulario__input-error2 {
	font-size: 12px;
	margin-bottom: 0;
	display: none;
}

.formulario__input-error-activo {
	display: block;
}

.formulario__input-error-activo2 {
	display: block;
}

/* .formulario__validacion-estado {
	position: absolute;
	right: 10px;
	bottom: 15px;
	z-index: 100;
	font-size: 16px;
	opacity: 0;
} */

.ver_password {
	position: absolute;
	right: 10px;
	bottom: 15px;
	z-index: 100;
	font-size: 16px;
	opacity: 1;
}

.formulario__checkbox {
	margin-right: 10px;
}

.formulario__mensaje,
.formulario__grupo-btn-enviar {
	grid-column: span 2;
}

.formulario__mensaje {
	height: 45px;
	line-height: 45px;
	background: #F66060;
	padding: 0 15px;
	border-radius: 3px;
	display: none;
}

.formulario__mensaje-activo {
	display: block;
}

.formulario__mensaje p {
	margin: 0;
}

.formulario__grupo-btn-enviar {
	display: flex;
	flex-direction: column;
}

.formulario__btn:hover {
	box-shadow: 3px 0px 30px rgba(163,163,163, 1);
}

.formulario__mensaje-exito {
	font-size: 14px;
	color: #119200;
	display: none;
}

.formulario__mensaje-exito-activo {
	display: block;
}

/* ----- -----  Estilos para Validacion ----- ----- */
.formulario__grupo-correcto .formulario__validacion-estado {
	color: #1ed12d;
	opacity: 1;	
}
.formulario__grupo-correcto2 .formulario__validacion-estado {
	color: #1ed12d;
	opacity: 1;	
}

.formulario__grupo-incorrecto .formulario__label {
	color: #bb2929;
}

.formulario__grupo-incorrecto .formulario__validacion-estado {
	color: #bb2929;
	opacity: 1;
}

.formulario__grupo-incorrecto .formulario__input {
	border: 3px solid #bb2929;
}
.formulario__grupo-incorrecto2 .formulario__label {
	color: #bb2929;
}

.formulario__grupo-incorrecto2 .formulario__validacion-estado {
	color: #bb2929;
	opacity: 1;
}

.formulario__grupo-incorrecto2 .formulario__input {
	border: 3px solid #bb2929;
}

/*Logo del Login */
.logo {
    display: block;
    margin: -40px auto 10px auto; 
    width: 140px; /* Ajusta el ancho de acuerdo a tu diseño */
    
}

.combobox {
    height: 30px;
    width: 330px;
    
}
.fecha-nacimiento-label {
    margin-bottom: 0; /* Elimina el margen inferior del label */
    /* Otros estilos si es necesario */
}

.fecha-nacimiento-input {
    margin-top: 0px; /* Ajusta el margen superior del input */
    /* Otros estilos si es necesario */
}

.mayuscula {
    text-transform: uppercase;
}

    </style>

    <main id="main" class="main">
        <div class="container mt-4">
            <div class="row">
                <div class="col-6">
                    <!-- <h2>Registro de Usuarios</h2> -->
                        <!-- <form action="../Controladores/nuevousuariocontroller.php" method="post">
                            <div class="mb-3">
                                <label for="dni">DNI:</label>
                                <input type="number" class="form-control" name="dni" id="dni" required>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="email" class="form-control" name="correo" id="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_contratacion">Fecha Contratación:</label>
                                <input type="date" class="form-control" name="fecha_contratacion" id="fecha_contratacion" required>
                            </div>
                            <div class="form-group">
                                <label for="estado">Estado:</label>
                                <select class="form-control" name="rol" id="rol" required>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>                            </div>

                            <div class="form-group">
                                <label for="rol">Rol:</label>
                                <select class="form-control" name="rol" id="rol" required>
                                    <option value="1">Administrador</option>
                                    <option value="2">Default</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="genero">Género:</label>
                                <select class="form-control" name="genero" id="genero" required>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fecha_vencimiento">Fecha Vencimiento:</label>
                                <input type="date" class="form-control" name="fecha_vencimiento" id="fecha_vencimiento">
                            </div>
                            <div class="form-group">
                                <label for="creado_por">Creado Por:</label>
                                <input type="text" class="form-control" name="creado_por" id="creado_por">
                            </div>
                            <div class="form-group">
                                <label for="fecha_vencimiento">Fecha Creación:</label>
                                <input type="date" class="form-control" name="fecha_vcreacion" id="fecha_creacion">
                            </div>

                            <button type="submit" class="btn btn-primary btn-center-text" style="padding: 2px 100px;">Guardar</button>
                        </form> -->

                        <div class="contenedor__todo">
                        <form action="../Controladores/nuevousuariocontroller.php" method="POST" class="formulario__register" id="registerFormUser">
                    <h2>Registro de Nuevo Usuario</h2>

                    <!-- GRUPO DNI -->
                    <div class="formulario__grupo" id="grupo__dni">
                        <label for="dni" class="formulario__label">DNI</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="dni" id="dni" placeholder="DNI"
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
                        <label for="correo2" class="formulario__label">Correo Electrónico</label>
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
                    <label for="direccion" class="formulario__label">Dirección</label>
                    <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Dirección" maxlength="80">
                        </div>
                        <p class="formulario__input-error"></p>
                    </div>

                    <!-- GRUPO FECHA NACIMIENTO -->
                    <div class="formulario__grupo" id="grupo__fecha">
                        <label for="fechanacimiento" class="formulario__label">Fecha de Nacimiento:</label><br>
                        <input type="date" placeholder="Fecha de Nacimiento" name="fechanacimiento" id="fechanacimiento"
                         class="fecha-nacimiento-input">
                        <p id="mensajeFechaNacimiento" class="mensaje_error" style="color: red;"></p>
                    </div>

                    <!-- GRUPO GENERO -->
                    <div class="gender-options">
                        <label for="genero" class="formulario__label">Género</label><br>
                        <div></div>
                        <select type="int" name="genero" id="genero" placeholder="Genero" class="combobox">>
                            <option value="0" selected>Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>

                    <!-- GRUPO FECHA CONTRATACION -->
                    <div class="formulario__grupo" id="grupo__fecha">
                        <label for="fechacontratacion" class="formulario__label">Fecha de Contratación:</label><br>
                        <input type="date" name="fechacontratacion" id="fechacontratacion"
                         class="fecha-contratacion-input">
                        <p id="mensajeFechaContratacion" class="mensaje_error" style="color: red;"></p>
                    </div>

                    <!-- GRUPO ROL -->
                    <div class="gender-options">
                        <label for="rol" class="formulario__label">Rol</label><br>
                        <div></div>
                        <select type="int" name="rol" id="rol" placeholder="rol" class="combobox">>
                            <option value="0" selected>Seleccione</option>
                            <option value="1">Administrador</option>
                            <option value="2">Defecto</option>
                        </select>
                    </div>

                    <!-- GRUPO ESTADO USUARIO -->
                    <div class="gender-options">
                        <label for="estadoUser" class="formulario__label">Estado usuario:</label><br>
                        <div></div>
                        <select type="int" name="estadoUser" id="estadoUser" placeholder="estadoUser" class="combobox">>
                            <option value="0" selected>Seleccione</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                    <!-- Botón entrar -->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn" id="btn_registrar">Guadar</button>
                    </div>
                </form>
                        </div>
               
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS Bundle (Bootstrap JS + Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="../../EstilosLogin/js/script.js"></script>    
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="module" src="../javascript/validacionNuevoRegistroUsuario.js"></script>

</body>
</html>
