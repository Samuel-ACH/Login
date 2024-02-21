<?php

// Valida que el usuario debe iniciar sesión forzosamente para acceder al sistema
// Iniciar sesión
session_start();

// Validar si se ha verificado el OTP
if (!isset($_SESSION['otp_verificado'])) {
  // Redirigir a la página de inicio de sesión
  header("Location: Index.php");
  exit();
}
if (!isset($_SESSION["correo"])) {
  echo '
            <script>
                alert("Por favor, debes iniciar sesión.")
                window.location = "Index.php";
            </script>
        ';
  session_destroy(); // Destruye la sesión
  die(); // el código se detiene en esta línea 

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
      $('#tablaAgenda').DataTable();
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

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

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
          <i class="bi bi-menu-button-wide"></i><span>Pacientes</span><i class="bi bi-chevron-down ms-auto"></i>
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
          <i class="bi bi-layout-text-window-reverse"></i><span>Expediente</span><i class="bi bi-chevron-down ms-auto"></i>
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
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Empleados</span>
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


      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="../Controladores/Logout.php">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Salir</span>
        </a>
      </li>End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Bienvenido</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <?php

    include("../PHP/Controladores/Conexion_be.php");
    // $sql = "SELECT Id_Paciente, Descripcion_Cita, Fecha_Cita, Hora_Cita FROM tbl_cita_terapeutica";
    // $resultSet = mysqli_query($conexion, $sql);
    ?>
    <section class="hero">
      <div class="contenido-hero">
        <h3>Citas Pendientes</h3>

        <p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-clock" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3" />
            <path d="M16 3v4" />
            <path d="M8 3v4" />
            <path d="M4 11h10" />
            <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
            <path d="M18 16.5v1.5l.5 .5" />
          </svg></p>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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