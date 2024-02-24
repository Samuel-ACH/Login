<!DOCTYPE html>
<html lang="en">

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
            <a href="Registro_Usuario_be.php">
              <i class="bi bi-circle"></i><span>Registrar </span>
            </a>
          </li>


        </ul>
      </li><!-- Fin modulo paciente -->
      </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">

<?php
include 'Conexion_be.php';
?>

<h2>Registro de Usuarios</h2> 
</div>
<!-- Formulario hijo oculto inicialmente -->
<form action="../Controladores/nuevousuariocontroller.php" method="post"> 
    DNI: <input type="number" name="dni"><br>
    Usuario: <input type="text" name="usuario"><br>
    Correo: <input type="text" name="correo"><br>
    Nombre: <input type="text" name="nombre"><br>
    Dirección: <input type="text" name="direccion"><br>
    Fecha Nacimiento: <input type="date" name="fecha_nacimiento"><br>
    Fecha Contratación: <input type="date" name="fecha_contratacion"><br>
    Estado: <input type="text" name="estado"><br>
    Contraseña: <input type="text" name="contrasena"><br>
    <label>Rol</label>
                            <select type="int" name="Rol" placeholder="rol" required>
                            <option value="0" selected></option>
                              <option value="1" >Administrador</option>
                             <option value="2">Default</option>
                            </select>
    <label>Genero</label>
                            <select type="int" name="genero" placeholder="Genero" required>
                            <option value="0" selected></option>
                              <option value="1" >Masculino</option>
                             <option value="2">Femenino</option>
                            </select>
    Última Conexión: <input type="date" name="ultima_conexion"><br>
    Primera Conexión: <input type="date" name="primera_conexion"><br>
    Fecha Vencimiento: <input type="date" name="fecha_vencimiento"><br>
    Creado Por: <input type="text" name="creado_por"><br>
    N. Inicios Sesión: <input type="number" name="N_inicios_sesion"><br>
        <!--Botón para enviar los datos-->
        <button type="submit" value="Registrar">Guardar</button>
</form>
</div>

</body>
</html>