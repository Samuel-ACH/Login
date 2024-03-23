<!-- editar_usuario.php -->
<?php
include '../../../Controladores/Conexion/Conexion_be.php';
require_once '../C_Usuario/C_editar_usuario.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $idUsuario = $_GET["id"];

    // Obtener los datos del usuario a editar
    $obtenerUsuarioQuery = "SELECT * FROM tbl_ms_usuario WHERE Id_Usuario = ?";
    $stmt = mysqli_prepare($conexion, $obtenerUsuarioQuery);
    mysqli_stmt_bind_param($stmt, "i", $idUsuario);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $usuario = mysqli_fetch_assoc($resultado);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ClínicaRED - Rehabilitación y Electrodiagnóstico </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../../../assets/img/red-logo.jpeg" rel="icon">
    <link href="../../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="../../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../../assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="../../../Vistas/Index.php" class="logo d-flex align-items-center">
                <img src="../../../../assets/img/red-logo.jpeg" alt="">
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
                        <img src="../../../../assets/img/user.png" alt="Profile" class="rounded-circle">
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
                            <a class="dropdown-item d-flex align-items-center" href="../../../Controladores/Logout.php">
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
                <a class="nav-link " href="../../../Vistas/Index.php">
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
                        <a href="./V_usuario.php">
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
                        <a href="../../../Vistas/Bitacora.php">
                            <i class="bi bi-circle"></i><span>Bitacora</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Objetos</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../Parametros/V_modal_parametros">
                            <i class="bi bi-circle"></i><span>Parametros</span>
                        </a>
                    </li>
                </ul>
            </li><!-- Fin modulo  Mantenimiento -->


        </ul>

    </aside><!-- End Sidebar-->
    <!-- Agrega tu encabezado y estilos aquí -->
<style>
         #main {
  width: 80%; /* Puedes ajustar el ancho según tus necesidades */
  height: 80vh; /* Puedes ajustar la altura según tus necesidades */
}
.col-12 {
  border-radius: 20px;
  border: 10px; /* Puedes ajustar el color y grosor del borde según tus preferencias */
  padding: 20px; /* Ajusta el espaciado interno del contenedor */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Agrega sombra al contenedor */
}

.row d-flex {
  margin: 0; /* Elimina el margen del contenedor */
}
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
.formulario_grupo-correcto .formulario_validacion-estado {
	color: #1ed12d;
	opacity: 1;	
}
.formulario_grupo-correcto2 .formulario_validacion-estado {
	color: #1ed12d;
	opacity: 1;	
}

.formulario_grupo-incorrecto .formulario_label {
	color: #bb2929;
}

.formulario_grupo-incorrecto .formulario_validacion-estado {
	color: #bb2929;
	opacity: 1;
}

.formulario_grupo-incorrecto .formulario_input {
	border: 3px solid #bb2929;
}
.formulario_grupo-incorrecto2 .formulario_label {
	color: #bb2929;
}

.formulario_grupo-incorrecto2 .formulario_validacion-estado {
	color: #bb2929;
	opacity: 1;
}

.formulario_grupo-incorrecto2 .formulario_input {
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

<main id="main" class="table">
    <div class="container mt-4">
            <div class="col-12">
            <center>
               <h2>Editar Usuario</h2>
            </center>
            
            <div class="contenedor__todo">
                <table class="table" style:"align-items-center">
                            <form action="../C_Usuario/C_editar_usuario" method="post" class="formulario__register" id="editFormUser">
                                <input type="hidden" name="idUsuario" value="<?php echo htmlspecialchars($usuario['Id_Usuario']); ?>">
                            <tbody>
                                <tr>
                                    <td>
                                        <!-- GRUPO DNI -->
                                        <div class="formulario__grupo" id="grupo__dni">
                                            <label for="dni" class="formulario__label">DNI</label>
                                            <div class="formulario__grupo-input">
                                                <input type="text" maxlength="13" pattern="[0-9]{13}" class="form-control" name="dni" id="dni" placeholder="DNI" 
                                                value="<?php echo htmlspecialchars($usuario['DNI']); ?>" required>
                                            </div>
                                            <p class="formulario__input-error"></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="formulario__grupo" id="grupo__nombre">
                                            <label for="nombre" class="formulario__label">Nombre Completo</label>
                                            <div class="formulario__grupo-input">
                                                <input type="text" class="form-control" name="nombre" id="nombre" style:"text-transform: uppercase" placeholder="Nombre completo" 
                                                maxlength="80" value="<?php echo htmlspecialchars($usuario['Nombre']); ?>" required>
                                            </div>
                                            <p class="formulario__input-error"></p>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <!-- GRUPO CORREO -->
                                    <td>
                                        <div class="formulario__grupo" id="grupo__correo2">
                                            <label for="correo2" class="formulario__label">Correo Electrónico</label>
                                            <div class="formulario__grupo-input">
                                                <input type="email" class="form-control" name="correo" id="correo" placeholder="usuario@dominio.com" 
                                                maxlength="40" value="<?php echo htmlspecialchars($usuario['Correo']); ?>" required>
                                            </div>
                                            <p class="formulario__input-error"></p>
                                        </div>
                                    </td>
                                    <!-- GRUPO USUARIO -->
                                    <td>
                                        <div class="formulario__grupo" id="grupo__usuario">
                                            <label for="usuario" class="formulario__label">Usuario</label>
                                            <div class="formulario__grupo-input">
                                                <input type="text" class="form-control" style:"text-transform: uppercase" name="usuario" id="usuario" placeholder="Usuario" 
                                                maxlength="15" value="<?php echo htmlspecialchars($usuario['Usuario']); ?>" required>
                                            </div>
                                            <p class="formulario__input-error"></p>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <!-- GRUPO DIRECCION -->
                                    <td>
                                        <div class="formulario__grupo" id="grupo__direccion">
                                            <div class="formulario__grupo-input">
                                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" 
                                                maxlength="80" value="<?php echo htmlspecialchars($usuario['Direccion']); ?>" required>
                                            </div>
                                            <p class="formulario__input-error"></p>
                                        </div>
                                    </td>
                                    <!-- GRUPO GENERO -->
                                    <td>
                                        <div class="formulario__grupo">
                                            <select type="text" name="genero" id="genero" class="form-control" placeholder="Genero" class="combobox"
                                            value="<?php echo htmlspecialchars($usuario['IdGenero']); ?>" required>
                                            <option value="0" <?php if ($usuario['IdGenero'] == 0) echo "selected"; ?>>Seleccione un género</option>
                                            <option value="1" <?php if ($usuario['IdGenero'] == 1) echo "selected"; ?>>Masculino</option>
                                            <option value="2" <?php if ($usuario['IdGenero'] == 2) echo "selected"; ?>>Femenino</option>
                                            </select>

                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <!-- GRUPO FECHA NACIMIENTO -->
                                    <td>
                                        <div class="formulario__grupo" id="grupo__fecha">
                                        <label for="Fechavencimiento">Fecha de Nacimiento:</label>
                                            <input  type="date" placeholder="Fecha de Nacimiento" name="fechanacimiento" id="fechanacimiento" class="form-control" min="1900-01-01" max="2006-01-01" value="<?php echo htmlspecialchars($usuario['FechaNacimiento']); ?>" required>
                                            <p id="mensajeFechaNacimiento" class="mensaje_error" style:"color: red;" > </p>
                                        </div>
                                    </td>
                                    <!-- GRUPO FECHA CONTRATACION -->
                                    <td>
                                        <div class="formulario__grupo" id="grupo__fecha">
                                        <label for="Fechavencimiento">Fecha de Contratación:</label>
                                            <input type="date" name="fechacontratacion" id="fechacontratacion" class="form-control"
                                            value="<?php echo htmlspecialchars($usuario['FechaContratacion']); ?>" required>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <!-- GRUPO ROL -->
                                    <td>
                                        <div class="gender-options">
                                            <div></div>
                                            <select type="int" name="rol" id="rol" class="form-control" placeholder="rol" class="combobox"
                                            value="<?php echo htmlspecialchars($usuario['IdRol']); ?>" required>
                                            <option value="0" <?php if ($usuario['IdRol'] == 0) echo "selected"; ?>>Seleccione un rol</option>
                                            <option value="1" <?php if ($usuario['IdRol'] == 1) echo "selected"; ?>>ADMINISTRADOR</option>
                                            <option value="2" <?php if ($usuario['IdRol'] == 2) echo "selected"; ?>>DEFECTO</option>
                                            <option value="3" <?php if ($usuario['IdRol'] == 3) echo "selected"; ?>>USUARIO</option>
                                            </select>
                                        </div>
                                    </td>
                                    <!-- GRUPO ESTADO USUARIO -->
                                    <td>
                                        <div class="gender-options">
                                            <div></div>
                                            <select type="int" class="form-control" name="estadoUser" id="estadoUser" placeholder="estadoUser" class="combobox"
                                            value="<?php echo htmlspecialchars($usuario['Estado_Usuario']); ?>" required>
                                            <option value="0" <?php if ($usuario['Estado_Usuario'] == 0) echo "selected"; ?>>Seleccione un estado</option>
                                            <option value="1" <?php if ($usuario['Estado_Usuario'] == 1) echo "selected"; ?>>Activo</option>
                                            <option value="2" <?php if ($usuario['Estado_Usuario'] == 2) echo "selected"; ?>>Inactivo</option>
                                            </select>

                                        </div>
                                    </td>
                                    </tr>

                                     <tr>
                                    <td>  
                                        <button type="submit" id="registrarBtn" class="btn btn-primary">Guardar Cambios</button>
                                        </td>
                                        <td> 
                                         <button id="cancelarbtn" onclick="confirmarCancelar()" class="btn btn-danger">Cancelar</button>
                                         </td>
                                     </tr>
                                     </form>
                                    </tbody>
<script>
    function confirmarCancelar() {
        // Mostrar un cuadro de diálogo de confirmación
        const confirmacion = confirm("¿Estás seguro de que deseas cancelar?");

        // Si el usuario hace clic en "Aceptar", redirigir a la pantalla de usuarios
        if (confirmacion) {
            // Redirigir a la pantalla de usuarios (reemplaza con la URL correcta)
            window.location.href = "./V_usuario.php";
        }
    }
</script>
                
            </div>
        </div>
    </div>
</main>
<!-- Bootstrap JS Bundle (Bootstrap JS + Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Datatables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="../../../../EstilosLogin/js/script.js"></script>    
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="module" src="../../../javascript/validacionNuevoRegistroUsuario.js"></script>

</body>

</html>