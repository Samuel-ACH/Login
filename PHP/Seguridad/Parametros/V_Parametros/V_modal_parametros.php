<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>CLÍNICA RED</title>
    
    <!-- Favicons -->
    <link href="../../../../assets/img/red-logo.jpeg" rel="icon">
    <link href="../../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <link rel="stylesheet" href="../../../../librerias/librerias.css"> <!-- archivo de encapsulamiento de librerias CSS -->
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script type="module" src="../../../../librerias/librerias.js"></script>

     <!-- ----------------CODIGO PARA GENERAR REPORTES------------------>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <!-- ESTILOS DE LA TABLA -->
     <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script> <!-- MOSTRAR BOTONES DE REPORTE -->
     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> LIBRERIA DE EXCEL  -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> <!-- IMPRIME PDF -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> <!-- LIBRERIA PDF -->
     <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script> <!-- LIBRERIA HTML -->
     <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"> </script> <!-- ICONOS -->

    <!-- librerias javascript -->
    <!-- <script src="../C_Parametros/C_funciones_parametros.js"></script> Funciones para el CRUD -->
    <script type="module" src="../C_Parametros/C_validacion_parametros.js"></script> <!-- Funciones de validación -->
    <script src="../../../../librerias/bootstrap/js/bootstrap.js" ></script> <!-- libreria Bootstrap -->
    <script src="../../../../librerias/alertifyjs/js/alertify.js" ></script> <!-- libreria Alertify -->

</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <a href="../../../Vistas/Main.php" class="logo d-flex align-items-center">
        <img src="../../../../assets/img/red-logo.jpeg" alt="">
        <span class="d-none d-lg-block">CLÍNICA RED</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<!-- <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
</div>End Search Bar -->

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
                <span class="d-none d-md-block dropdown-toggle ps-2">Perfil</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
          
          <h6>
          <?php echo $_SESSION['nombre'];?>
      </h6>
      <span>
          <?php echo $_SESSION['rol'];?>
      </span>
                    
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
                <a class="nav-link " href="../../../Vistas/Main.php">
                    <i class="bi bi-grid"></i>
                    <span>Inicio</span>
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
                            <i class="bi bi-circle"></i><span>Gestión de Citas</span>
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
                            <i class="bi bi-circle"></i><span>Gestión Expediente</span>
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
                        <a href="../../Usuario/V_Usuario/V_usuario.php">
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
                        <a href="./V_modal_parametros.php">
                            <i class="bi bi-circle"></i><span>Parámetros</span>
                        </a>
                    </li>
                </ul>
            </li><!-- Fin modulo  Mantenimiento -->
            </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Mantenimiento de Parámetros</h1>
        <!-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav> -->
    </div><!-- End Page Title -->

    <div class="container mt-4">
        <div id="tablaParametros"></div>
    </div>

   <!-- MODAL AGREGAR PARÁMETRO -->
<div class="modal fade" id="modalNuevoParametro" tabindex="-1" aria-labelledby="modalNuevoParametroLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalNuevoParametroLabel">Agregar Parámetro</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

        <!-- GRUPO PARÁMETRO -->
        <div class="formulario__grupo" id="grupo__parametro">
            <label for="parametro" class="formulario__label">Parámetro:</label>
            <div class="formulario__grupo-input">
                <input type="text" class="form-control formulario__input" style="text-transform: uppercase" name="parametro" id="parametro" placeholder="Parámetro" maxlength="50">
            </div>
            <p class="formulario__input-error"></p>
        </div>

        <!-- GRUPO VALOR PARÁMETRO -->
        <div class="formulario__grupo" id="grupo__valorParametro">
            <label for="valorParametro" class="formulario__label">Valor:</label>
            <div class="formulario__grupo-input">
                <input type="text" class="form-control formulario__input" name="valorParametro" id="valorParametro" placeholder="Valor del parámetro" maxlength="50">
            </div>
            <p class="formulario__input-error"></p>
        </div>
        
        <!-- <label for="parametro">Parámetro:</label>
        <input type="text" id="parametro" placeholder="Parámetro" class="form-control input-sm">
        <label for="valorParametro">Valor:</label>
        <input type="text" id="valorParametro" placeholder="Valor del parámetro" class="form-control input-sm"> -->

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> -->
        <button type="submit" id="guardarParametro" class="btn btn-primary btn-block">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PARA VER PARÁMETRO -->
<div class="modal fade" id="modalVerParametro" tabindex="-1" aria-labelledby="modalVerParametroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalVerParametroLabel">Ver Parámetro</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <input type="text" id="Id_Parametro_L" hidden readonly class="form-control input-sm">
        <label>Parámetro:</label>
        <input type="text" id="parametro_L" readonly class="form-control input-sm">
        <label>Valor:</label>
        <input type="text" id="valorParametro_L" readonly class="form-control input-sm">
        <label>Creado Por:</label>
        <input type="text" id="creadoPor_L" readonly class="form-control input-sm">
        <label>Fecha Creación:</label>
        <input type="text" id="fechaCreacion_L" readonly class="form-control input-sm">
        <label>Modificado Por:</label>
        <input type="text" id="modificadoPor_L" readonly class="form-control input-sm">
        <label>Fecha Modificación:</label>
        <input type="text" id="fechaModificacion_L" readonly class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="VerParametro" class="btn btn-primary">Actualizar</button> -->
      </div>
    </div>
  </div>
</div>

<!-- MODAL PARA EDITAR PARÁMETRO -->
<div class="modal fade" id="modalEditarParametro" tabindex="-1" aria-labelledby="modalEditarParametroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditarParametroLabel">Editar Parámetro</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <input type="text" hidden="" id="Id_Parametro" name="">
        <label for="parametroE">Parámetro:</label>
        <input type="text" id="parametroE" readonly class="form-control input-sm">
        <label for="valorParametroE">Valor:</label>
        <input type="text" id="valorParametroE" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button> -->
        <button type="button" id="actualizarParametro" class="btn btn-primary btn-block">Actualizar</button>
      </div>
    </div>
  </div>
</div>
   
</main> 
<!-- dentro del main va la tabla o informacion -->

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>TechTitans</span></strong>. Derechos Reservados
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>   

</body>
</html>

<script>
    $(document).ready(function(){
        $('#tablaParametros').load('./V_mantenimiento_parametros.php');
    });
</script>

<script >
    $(document).ready(function(){
        $('#guardarParametro').click(function(){
            $('#tablaParametros').load('./V_mantenimiento_parametros.php');
            parametro = $('#parametro').val();
            valorParametro = $('#valorParametro').val();
            insertarParametro(parametro, valorParametro);            
        });

        $('#actualizarParametro').click(function(){
            e.preventDefault();
          actualizaParametro();
        });
    });
</script>
