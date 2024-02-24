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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Bitácora</h1>
    </div><!-- End Page Title -->
    <div class="card-body">
        <label class="text mr-2">Seleccionar Rango:</label>
        <!-- Desde a Hasta en una sola línea -->
    <div class="form-inline mb-3">
    <label for="startDate" class="mr-sm-2">Desde:</label>
    <input type="date" id="startDate" class="form-inline mr-sm-2">

    <label for="endDate" class="mr-sm-2">Hasta:</label>
    <input type="date" id="endDate" class="form-inline mr-sm-2">
    <button type="button" class="btn btn-danger" style="padding: 2px 100px;">
    <i class="fas fa-trash"></i> Depurar Bitácora
</button>
    <button type="button" class="btn btn-secondary" style="padding: 2px 100px;" display="inline-block;"><i class="fas fa-file-pdf"></i> Generar PDF</button>
    </div>


        <!-- Inserta la imagen centrada aquí -->
        <div class="text-center mb-4">
    </div>
    
    <?php

    include("../PHP/Controladores/Conexion_be.php");

    ?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-10">

          <table class="table " id="tablaAgenda">
            <thead class="encabezado bg-light table-info">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha y Hora</th>
                <th scope="col">Usuario</th>
                <th scope="col">Objeto</th>
                <th scope="col">Accion</th>
                <th scope="col">Descripcion</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                                        <th scope="row">1</th>
                                        <td>2024-2-6 19:20:20</td>
                                        <td>Administrador</td>
                                        <td>Login</td>
                                        <td>Iniciar Sesion</td>
                                        <td>El administrador Sesion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>2024-2-6 19:20:20</td>
                                        <td>Administrador</td>
                                        <td>NewPassword</td>
                                        <td>Nueva Contraseña</td>
                                        <td>Cambiar contraseña de usuario</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>2024-2-6 19:20:20</td>
                                        <td>Administrador</td>
                                        <td>Login</td>
                                        <td>Iniciar Sesion</td>
                                        <td>El administrador Sesion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>2024-2-6 19:20:20</td>
                                        <td>Administrador</td>
                                        <td>Login</td>
                                        <td>Iniciar Sesion</td>
                                        <td>El administrador Sesion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>2024-2-6 19:20:20</td>
                                        <td>Administrador</td>
                                        <td>NewPassword</td>
                                        <td>Nueva Contraseña</td>
                                        <td>Cambiar contraseña de usuario</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>2024-2-6 19:20:20</td>
                                        <td>Administrador</td>
                                        <td>Login</td>
                                        <td>Iniciar Sesion</td>
                                        <td>El administrador Sesion</td>
                                    </tr>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

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