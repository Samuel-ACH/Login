<!-- editar_usuario.php -->
<?php
include '../Controladores/Conexion_be.php';

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
    <body><
    <!-- Agrega tu encabezado y estilos aquí -->

    <main id="main" class="main">
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h2>Editar Usuario</h2>
                <form action="../Controladores/guardar_edicion_usuario.php" method="post">
                    <input type="hidden" name="idUsuario" value="<?php echo htmlspecialchars($usuario['Id_Usuario']); ?>">
                    
                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input type="number" name="dni" class="form-control" value="<?php echo htmlspecialchars($usuario['DNI']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" name="usuario" class="form-control" value="<?php echo htmlspecialchars($usuario['Usuario']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input type="email" name="correo" class="form-control" value="<?php echo htmlspecialchars($usuario['Correo']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" name="estado" class="form-control" value="<?php echo htmlspecialchars($usuario['Estado_Usuario']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="rol">Rol:</label>
                        <input type="text" name="rol" class="form-control" value="<?php echo htmlspecialchars($usuario['IdRol']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <input type="text" name="genero" class="form-control" value="<?php echo htmlspecialchars($usuario['IdGenero']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Fechavencimiento">Fecha de Vencimiento:</label>
                        <input type="date" name="fechavencimiento" class="form-control" value="<?php echo htmlspecialchars($usuario['Fecha_Vencimiento']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="creadopor">Creado Por:</label>
                        <input type="text" name="creadopor" class="form-control" value="<?php echo htmlspecialchars($usuario['Creado_Por']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fechanacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fechanacimiento" class="form-control" value="<?php echo htmlspecialchars($usuario['FechaNacimiento']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fechacontratacion">Fecha de Contratación:</label>
                        <input type="date" name="fechacontratacion" class="form-control" value="<?php echo htmlspecialchars($usuario['FechaContratacion']); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fechacreacion">Fecha de Creación:</label>
                        <input type="date" name="fechacreacion" class="form-control" value="<?php echo htmlspecialchars($usuario['Fecha_Creacion']); ?>" required>
                    </div>
                    
                    <button type="submit" value="Registrar" class="btn btn-primary" style="padding: 2px 100px;">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</main>


</body>

</html>