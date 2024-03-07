<?php
include '../Controladores/Conexion_be.php';
// include ('Dashboard.php')
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
                            <i class="bi bi-circle"></i><span>Bitácora</span>
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


<main id="main" class="main">
  <div class="pagetitle ">
    <h1>Registro de Usuarios 
    <form action="nuevoregistrousr.php" method="post"> 
        <button id="agregarusuario" class="btn btn-primary float-start" style="padding: 2px 100px;">Agregar Usuario</button>
    </form>
    </h1>
  </div>
</main>

<div class="container mt-4">
  <div class="row">
    <div class="col-10">
      <table id="tablaAgenda" class="table">
        <thead class="encabezado bg-light table-info">
          <tr>
               <th scope="col">Id Usuario</th>
              <th scope="col">DNI</th>
              <th scope="col">Usuario</th>
              <th scope="col">Correo</th>
              <th scope="col">Nombre</th>                
              <th scope="col">Estado</th>
              <th scope="col">Rol</th>
              <th scope="col">Género</th>
              <th scope="col">Fecha Vencimiento</th>
              <th scope="col">Creado Por</th>
              <th scope="col" class="ocultar">Fecha Nacimiento</th>
              <th scope="col" class="ocultar">Fecha Contratación</th>
              <th scope="col" class="ocultar">Fecha Creación</th>
              <th scope="col">Opciones</th>
          </tr>
        
        </thead>
        <tbody>
          <?php
            $sql = "SELECT Id_Usuario, DNI, Usuario, Correo, Nombre, Estado_Usuario, IdRol, IdGenero, Creado_Por, Fecha_Creacion
                    Fecha_Vencimiento, FechaNacimiento, FechaContratacion
                    FROM tbl_ms_usuario";
            $resultado = mysqli_query($conexion, $sql);
            // Recorrer los resultados y mostrarlos en la tabla
            foreach ($resultado as $fila) {
              ?>
              <tr>
                <td><?php echo $fila['Id_Usuario'] ?></td>
                <td><?php echo $fila['DNI'] ?></td>
                <td><?php echo $fila['Usuario'] ?></td>
                <td><?php echo $fila['Correo'] ?></td>
                <td><?php echo $fila['Nombre'] ?></td>
                <td><?php echo $fila['Estado_Usuario'] ?></td>
                <td><?php echo $fila['IdRol'] ?></td>
                <td><?php echo $fila['IdGenero'] ?></td>
                <td><?php echo $fila['Fecha_Vencimiento'] ?></td>
                <td><?php echo $fila['Creado_Por'] ?></td>

                <td class="ocultar"><?php echo $fila['FechaNacimiento'] ?></td>
                <td class="ocultar"><?php echo $fila['FechaContratacion']; ?></td>
                <td class="ocultar"><?php echo $fila['Fecha_Creacion'] ?></td>

                <!-- Botones Editar y Eliminar -->
<!-- Dentro del bucle foreach para mostrar los usuarios -->
<td>
    <a href="editar_usuario.php?id=<?php echo $fila['Id_Usuario']; ?>" class="btn btn-warning btn-sm">
        <i class="bi bi-pencil"></i> 
    </a>
    <button class="btn btn-danger btn-sm eliminarBtn" data-id="<?php echo $fila['Id_Usuario']; ?>">
        <i class="bi bi-trash"></i> 
       <!--Script para manejar clic en botón Eliminar-->

    </button>
</td>

                
              </tr>
          <?php 
            }
          ?>
        </tbody>
      </table>
      <button id="verMasBtn" class="btn btn-primary" style="padding: 2px 100px;">Ver más</button>

      <button id="verMenosBtn" class="btn btn-danger" style="padding: 2px 100px;">Ver menos</button>
    </div>
  </div>
</div>

<!-- Agrega el script AJAX para eliminar usuarios -->
<script>
    // Manejar clic en botón Eliminar
    $('.eliminarBtn').click(function() {
        var idUsuario = $(this).data('id');

        // Confirmar si realmente deseas eliminar el usuario
        if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            // Realizar una solicitud AJAX para eliminar el usuario con el ID proporcionado
            $.ajax({
                url: '../Controladores/eliminar_usuario.php',
                method: 'POST',
                data: { id: idUsuario },
                success: function(response) {
                    // Actualizar la tabla o hacer algo después de eliminar
                    // Puedes recargar la página o actualizar la tabla usando DataTables
                    // Ejemplo de recargar la página:
                    location.reload();
                },
                error: function(error) {
                    console.error("Error al eliminar usuario: " + error.responseText);
                }
            });
        }
    });
</script>

<script>
  document.getElementById("verMasBtn").addEventListener("click", function() {
    const columnasOcultas = document.querySelectorAll("th.ocultar, td.ocultar");
    columnasOcultas.forEach(columna => columna.style.display = "table-cell");
    this.style.display = "none"; // Oculta el botón "Ver más" después de hacer clic
    document.getElementById("verMenosBtn").style.display = "block"; // Muestra el botón "Ver menos"
  });

  document.getElementById("verMenosBtn").addEventListener("click", function() {
    const columnasOcultas = document.querySelectorAll("th.ocultar, td.ocultar");
    columnasOcultas.forEach(columna => columna.style.display = "none");
    this.style.display = "none"; // Oculta el botón "Ver menos" después de hacer clic
    document.getElementById("verMasBtn").style.display = "block"; // Muestra el botón "Ver más"
  });

  // Ocultar las columnas iniciales (aquellas que tienen la clase "ocultar")
  document.querySelectorAll(".ocultar").forEach(columna => columna.style.display = "none");
</script>

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