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

    <script>
    $(document).ready(function() {
        $('#tablaAgenda').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            } //codigo para el lenguaje del archivo JSON
        });
          $('.editarBtn').click(function() {
                var idPaciente = $(this).data('id');
                // Redireccionar o hacer algo con el ID para editar
                window.location.href = './V_editar_paciente.php?id=' + idPaciente;
            });

            // Manejar clic en botón Eliminar
            $('.eliminarBtn').click(function() {
                var idPaciente = $(this).data('id');
                // Realizar una solicitud AJAX para eliminar el paciente con el ID proporcionado
                // Puedes usar jQuery.ajax o Fetch API para esto
             $.ajax({
                    url: '../C_Paciente/C_eliminar_paciente.php',
                    method: 'POST',
                    data: { id: idPaciente },
                    success: function(response) {
                //         // Actualizar la tabla o hacer algo después de eliminar
                //         // Puedes recargar la página o actualizar la tabla paciente DataTables
                // Ejemplo de recargar la página:
                   location.reload();
                },
                error: function(error) {
                console.error("Error al eliminar paciente: " + error.responseText);
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
                        <a href="V_paciente.php">
                            <i class="bi bi-circle"></i><span>Gestion Paciente</span>
                        </a>
                    </li>
                    <li>
                        <a href="V_nuevo_paciente.php">
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
                        <!-- <a href="forms-elements.html"> -->
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
                        <!-- <a href="tables-general.html"> -->
                            <i class="bi bi-circle"></i><span>Gestion Expediente</span>
                        </a>
                    </li>
                    <li>
                        <!-- <a href="tables-data.html"> -->
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
                        <!-- <a href="charts-apexcharts.html"> -->
                            <i class="bi bi-circle"></i><span>Permisos</span>
                        </a>
                    </li>
                    <li>
                        <!-- <a href="charts-echarts.html"> -->
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

    <?php
    include '../../../Controladores/Conexion/Conexion_be.php';
    ?>

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
	/* border: 3px solid transparent; */
	border-radius: 3px;
	height: 45px;
	line-height: 45px;
	padding: 0 40px 0 10px;
	transition: .3s ease all;
    /* border-radius: var(--bs-border-radius); */
    /* transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; */
    display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: var(--bs-body-color);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--bs-body-bg);
  background-clip: padding-box;
  border: var(--bs-border-width) solid var(--bs-border-color);
  border-radius: var(--bs-border-radius);
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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

/* .ver_password {
	position: absolute;
	right: 10px;
	bottom: 15px;
	z-index: 100;
	font-size: 16px;
	opacity: 1;
} */

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

<main id="main" class="table">
    <div class="container mt-4">
            <div class="col-12">
                <center>
                    <h2>Registro de Nuevo Paciente</h2>
                </center>
                <!-- <img src="../../Imagenes/logo2.jpg" style="align-items-left; width: 100px; height: 100px; border-radius: 50%;"> -->
                <form action="../C_Paciente/C_nuevo_paciente.php" method="POST" class="formulario__register" id="registerFormUser">
                    <div class="contenedor__todo">
                            <table class="table" style:"align-items-center">
                                <tbody>
                                    <tr>                                    
                                        <!-- GRUPO NOMBRE COMPLETO -->
                                        <td>
                                            <div class="formulario__grupo" id="grupo__nombre">
                                                <label for="nombre">Nombre Completo</label>
                                                <div class="formulario__grupo-input">
                                                    <input type="text" class="formulario__input" class="form-control" name="nombre" id="nombre" autocomplete="off" style="text-transform: uppercase" placeholder="Ingrese su nombre completo." maxlength="80" required>
                                                </div>
                                                <p class="formulario__input-error"></p>
                                            </div>
                                        </td>
                                        <?php
                                            $sql = "SELECT * FROM tbl_genero";                                            
                                            $genero = mysqli_query($conexion, $sql);
                                        ?>
                                        <!-- GRUPO GENERO -->
                                        <td>
                                            <div class="formulario__grupo">
                                                <label for="genero">Género</label>
                                                    <select type="text" class="formulario__input" name="genero" id="genero" class="form-control" autocomplete="off" placeholder="Genero" class="combobox" required>
                                                        <option value="">Seleccione un género</option>
                                                        <?php
                                                            foreach ($genero as $value) {                                                        
                                                        ?>
                                                        <option value="<?php echo $value['IdGenero']; ?>"><?php echo $value['Descripcion']; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                            </div>
                                        </td>    
                                    </tr>
                                    <tr>
                                        <!-- GRUPO FECHA NACIMIENTO -->
                                        <td>
                                            <div class="formulario__grupo" id="grupo__fecha">
                                                <label for="Fechavencimiento">Fecha de Nacimiento:</label>
                                                <div class="formulario__grupo-input">
                                                    <input  type="date" class="formulario__input" placeholder="Fecha de Nacimiento" autocomplete="off" name="fechanacimiento" id="fechanacimiento" class="form-control" min="1900-01-01" max="2006-01-01" required>
                                                </div>
                                                <p id="mensajeFechaNacimiento" class="mensaje_error" style="color: red;"></p>
                                            </div>
                                        </td>    
                                        <!-- GRUPO DIRECCION -->
                                        <td>
                                            <div class="formulario__grupo" id="grupo__direccion">
                                                <label for="direccion">Dirección</label>
                                                <div class="formulario__grupo-input">
                                                    <input type="text" class="formulario__input" class="form-control" name="direccion" id="direccion" autocomplete="off" style="text-transform: uppercase" placeholder="Ingrese su dirección" maxlength="80" required>
                                                </div>
                                                <p class="formulario__input-error"></p>
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <?php
                                            $sql = "SELECT * FROM tbl_tipo_documento";                                            
                                            $resultado = mysqli_query($conexion, $sql);
                                        ?>
                                        <!-- GRUPO TIPO DE DOCUMENTO -->
                                        <td>
                                            <div class="gender-options">
                                                <label for="tipo_documento">Tipo de Documento</label>
                                                <select type="int" class="formulario__input" name="id_tipo_documento" id="id_tipo_documento" class="form-control" autocomplete="off" class="combobox" required>
                                                    <option value="" selected>Seleccione un tipo de documento</option>
                                                    <?php
                                                        // Recorrer los resultados y mostrarlos en la tabla
                                                        foreach ($resultado as $fila) {
                                                    ?>
                                                    <option value="<?php echo $fila['Id_Tipo_Documento']; ?>"><?php echo $fila['Descripcion']; ?></option>
                                                    <?php 
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <!-- GRUPO NÚMERO DE DOCUMENTO -->
                                            <div class="formulario__grupo" id="grupo__numero_de_documento">
                                                <label for="numero_de_documento">Número de Documento</label>
                                                <div class="formulario__grupo-input">
                                                    <input type="text" minlength="13" maxlength="15" pattern="[0-9]{13-15}" class="formulario__input" class="form-control" name="numero_de_documento" id="numero_de_documento" placeholder=" INGRESE SU NÚMERO DE DOCUMENTO" autocomplete="off" required>
                                                </div>
                                                <p class="formulario__input-error"></p>
                                            </div>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- GRUPO OCUPACIÓN -->
                                                <div class="formulario__grupo" id="grupo__ocupacion">
                                                    <label for="ocupacion">Ocupación</label>
                                                    <div class="formulario__grupo-input">
                                                        <input type="text" style="text-transform: uppercase" pattern="[A-Za-z]{1,50}" class="formulario__input" class="form-control" name="ocupacion" id="ocupacion" placeholder="INGRESE SU OCUPACIÓN" autocomplete="off" required title="Ingrese solo letras (hasta 50 caracteres).">
                                                    </div>
                                                    <p class="formulario__input-error"></p>
                                                </div>
                                            </td>
                                            <td>
                                                <!-- GRUPO ESTADO USUARIO -->
                                                <div class="gender-options">
                                                    <label for="estadoPaciente">Estado</label>
                                                    <select type="int" class="formulario__input" class="form-control" name="estadoPaciente" id="estadoPaciente" autocomplete="off" class="combobox" required>
                                                        <option value="">Seleccione un estado</option>
                                                        <option value="1">ACTIVO</option>
                                                        <option value="0">INACTIVO</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>  
                                        <tr>
                                            <td>
                                                <button type="submit" id="Btnregistrar" class="btn btn-primary">Guardar</button>

                                            </td>
                                            <td>
                                                <button id="Btncancelar" onclick="confirmarCancelar()" class="btn btn-danger" >Cancelar</button>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
    function confirmarCancelar() {
        // Mostrar un cuadro de diálogo de confirmación
        const confirmacion = confirm("¿Estás seguro de que deseas cancelar?");

        // Si el usuario hace clic en "Aceptar", redirigir a la pantalla de usuarpacientesios
        if (confirmacion) {
            // Redirigir a la pantalla de pacientes (reemplaza con la URL correcta)
            window.location.href = "./V_paciente.php";
        }
    }
</script>

    <!-- Bootstrap JS Bundle (Bootstrap JS + Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="../../../../EstilosLogin/js/script.js"></script>    
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="module" src="../../../javascript/validacionNuevoRegistroUsuario.js"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Template Main JS File -->
    <script src="../../../../assets/js/main.js"></script>
</body>
</html>
