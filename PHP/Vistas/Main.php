<?php
// Valida que el usuario debe iniciar sesión forzosamente para acceder al sistema
session_start();
// Validar si se ha verificado el OTP y si el usuario está autenticado
if (!isset($_SESSION['autenticado']) || !isset($_SESSION["correo"])) {
  echo '
  <script>
      alert("Por favor, debes iniciar sesión.")
      window.location = "Index.php";
  </script>
';
session_destroy(); // Destruye la sesión
die(); 
}
// // // // // // Ingresa al main sin el OTP
// if (!isset($_SESSION["correo"])) {
//  echo '
//           <script>
//                  alert("Por favor, debes iniciar sesión.")
//                 window.location = "Index.php";
//             </script>
//        ';
//   session_destroy(); // Destruye la sesión
//   die(); // el código se detiene en esta línea 
// }

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
                           <a class="dropdown-item d-flex align-items-center" href="Perfil.php?id=<?php echo $_SSESION['usuario']; ?>">
                                <i class="bi bi-person"></i>
                                <span>Ver Perfil</span>
                           </a>
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
                <a class="nav-link " href="./Main.php">
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
                        <a href="../Seguridad/Usuario/V_Usuario/V_usuario.php">
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
                        <a href="./Bitacora.php">
                            <i class="bi bi-circle"></i><span>Bitacora</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Objetos</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Seguridad/Parametros/V_Parametros/V_modal_parametros.php">
                            <i class="bi bi-circle"></i><span>Parámetros</span>
                        </a>
                    </li>
                </ul>
            </li><!-- Fin modulo  Mantenimiento -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>¡Bienvenido!</h1>
            
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php
    ?>
        <section class="hero">
            <div class="contenido-hero">
            </div>
        </section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">

                    <table class="table " id="tablaAgenda">
                        <thead class="encabezado bg-light table-info">
                            <tr>

                                <th scope="col">Paciente</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha Cita</th>
                                <th scope="col">Hora Cita</th>
                                <th scope="col">Detalles</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Juan</td>
                                <td>Terapia</td>
                                <td>09/02/2024</td>
                                <td>09:14 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>

                            </tr>
                            <tr>
                                <td> Pedro</td>
                                <td>Fisioterapia</td>
                                <td>09/02/2024</td>
                                <td>11:59 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Javier</td>
                                <td>Fisioterapia</td>
                                <td>09/02/2024</td>
                                <td>11:59 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Anthony</td>
                                <td>Terapia</td>
                                <td>09/02/2024</td>
                                <td>11:59 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Anthony</td>
                                <td>Terapia</td>
                                <td>09/02/2024</td>
                                <td>11:59 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10-02-2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>
                            <tr>
                                <td> Maria</td>
                                <td>Terapia</td>
                                <td>10/02/2024</td>
                                <td>12:01 </td>
                                <td>
                                    <div class="iconos d-flex align-items-center">
                                        <button type="button" class="btn btn-info">Ver</button>
                                        <div class="ms-3">
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Fin de Citas Proximas-->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>TechTitans</span></strong>. Derechos Reservados
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../assets/vendor/quill/quill.min.js"></script>
    <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
</body>

</html>