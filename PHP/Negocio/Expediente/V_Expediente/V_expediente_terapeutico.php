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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" />

    <link href="./V_expediente_terapeutico.css" rel="stylesheet">
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
                                //   echo $_SESSION['correo'];
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
                    <i class="bi bi-menu-button-wide"></i><span>Pacientes</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>

                        <a href="components-alerts.php">

                        <i class="bi bi-circle"></i><span>Gestion Paciente</span>
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

    <?php
    include '../../../Controladores/Conexion/Conexion_be.php';

    ?>

    <main id="main" class="table">
        <div class="container mt-4">
            <div class="col-12">
                <center>
                    <h2>EXPEDIENTE TERAPÉUTICO</h2>
                    <hr>
                </center>
                <div class="col-md-12">

                    <div class="card-info-paciente">
                        <div class="divEvaluacion">
                            <label class="labelEvaluacion">INFORMACIÓN DEL PACIENTE</label>
                        </div>
                        <div class="divDescripcionEvaluacion">
                            <div class="col-tarjeta-paciente">
                                <div class="form-group">
                                    <label for="paciente">NOMBRE:</label>
                                    <input type="text" class="formulario__input" readonly id="paciente" name="paciente">
                                    <!-- <label for="Numero_Documento">IDENTIFICACIÓN:</label>
                                         <input type="text" class="formulario__input" readonly id="Numero_Documento" name="Numero_Documento">
                                         <label for="ocupacion">OCUPACIÓN:</label>
                                         <input type="text" class="formulario__input" readonly id="ocupacion" name="ocupacion">
                                         <label for="direccion">DIRECCIÓN:</label>
                                         <input type="text" class="formulario__input" readonly id="direccion" name="direccion"> -->
                                    <label for="telefono">TELÉFONO:</label>
                                    <input type="text" class="formulario__input" readonly id="telefono" name="telefono">
                                    <label for="edad">EDAD:</label>
                                    <input type="text" class="formulario__input" readonly id="edad" name="edad">
                                    <label for="fisiatra">EVALUADOR:</label>
                                    <input type="text" class="formulario__input" readonly id="fisiatra" name="fisiatra">
                                    <label for="motivoConsulta">MOTIVO DE CONSULTA:</label>
                                    <input type="text" class="formulario__input" readonly id="motivoConsulta" name="motivoConsulta">
                                    <label for="numero_sesiones">N° SESIONES:</label>
                                    <input type="text" class="formulario__input" readonly id="numero_sesiones" name="numero_sesiones">
                                    <!-- <textarea type="text" class="formulario__input" id="lateralidad" name="lateralidad"></textarea> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contenedor de las tarjetas en dos columnas -->
                <div class="row">
                    <!-- Primera columna -->
                    <div class="col-md-6">
                        <div class="contenedor-tarjetas-columna">
                            <!-- <h4>Columna 1</h4> -->
                            <div id="contenedor-tarjetas-columna1">
                                <!-- Las tarjetas de la columna 1 se agregarán aquí -->
                            </div>
                        </div>
                    </div>

                    <!-- Segunda columna -->
                    <div class="col-md-6">
                        <div class="contenedor-tarjetas-columna">
                            <!-- <h4>Columna 2</h4> -->
                            <div id="contenedor-tarjetas-columna2">
                                <!-- Las tarjetas de la columna 2 se agregarán aquí -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Selector de tratamientos -->
                <div class="gender-options">
                    <label for="genero" class="formulario__label">TRATAMIENTOS</label>
                    <select type="int" autocomplete="off" name="tratamiento" id="tratamiento" placeholder="Tratamiento" class="combobox">
                        <option value="0" selected>SELECCIONE</option>
                        <?php
                        include('../../../Controladores/Conexion/Conexion_be.php');
                        $query = "SELECT TT.Id_Tipo_Tratamiento AS Correlativo, TT.Nombre AS Tratamiento FROM `tbl_tipo_tratamiento` AS TT";
                        $resultado = mysqli_query($conexion, $query);

                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo '<option value="' . $fila['Correlativo'] . '">' . $fila['Tratamiento'] . '</option>';
                        }

                        mysqli_free_result($resultado);
                        mysqli_close($conexion);
                        ?>
                    </select>
                    <p id="mensajeGenero2" class="mensaje_error" style="color: #bb2929;"></p>
                </div>
            </div>
        </div>
    </main>

<script>
    function cerrarTarjeta(idTarjeta) {
        var tarjeta = document.getElementById(idTarjeta);
        tarjeta.style.display = 'none'; // Oculta la tarjeta cambiando su estilo de visualización
    }

    function mostrarTarjeta(idTarjeta) {
        var tarjeta = document.getElementById(idTarjeta);
        tarjeta.style.display = 'block'; // Muestra la tarjeta cambiando su estilo de visualización
    }
</script>

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


    <!-- Bootstrap JS Bundle (Bootstrap JS + Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="../../../../EstilosLogin/js/script.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Template Main JS File -->
    <script src="../../../../assets/js/main.js"></script>
    <script src="../C_Expediente/C_mostrar_tarjetas.js" ></script>


</body>

</html>