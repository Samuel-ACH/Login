
<?php
include '../Controladores/Conexion/Conexion_be.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CLÍNICA RED</title>
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

  <!-- Estilos y librerias para reportes -->
  <link rel="stylesheet" href="../CSSReportes/botones.css">
    <!-- <link rel="stylesheet" href="../CSSReportes/EstilosModal.css">  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>


  <!-- <script>
    $(document).ready(function() {
        $('#tablaAgenda').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            } //codigo para el lenguaje del archivo JSON
        });
    }); -->
  <!-- </script> -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="./Main.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/red-logo.jpeg" alt="">
        <span class="d-none d-lg-block">CLÍNICA RED</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
      </form> -->
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
        <a class="nav-link " href="./Main.php">
          <i class="bi bi-grid"></i>
          <span>Inicio</span>
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
            <a href="../Seguridad/Parametros/Modal_Parametros.php">
              <i class="bi bi-circle"></i><span>Parámetros</span>
            </a>
          </li>
        </ul>
      </li><!-- Fin modulo  Mantenimiento -->
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mantenimiento de Bitácora</h1>
    </div><!-- End Page Title -->
    
    <!-- <button type="button" class="btn btn-secondary" style="padding: 3px 50px;" display="inline-block;"><i class="fas fa-file-pdf"></i> PDF</button> -->
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
        <div class="card-body">
        <label class="text mr-2">Seleccionar Rango:</label>
        <!-- Desde a Hasta en una sola línea -->
    <div class="form-inline mb-3">
    <label for="startDate" class="mr-sm-2">Desde:</label>
    <input type="date" id="startDate" class="form-inline mr-sm-2">

    <label for="endDate" class="mr-sm-2">Hasta:</label>
    <input type="date" id="endDate" class="form-inline mr-sm-2">
    <button type="button" class="btn btn-danger">
    <i class="fas fa-trash btn-depurar"></i> Depurar</button>

          <table class="table " id="tablaAgenda">
            <thead class="encabezado bg-light table-info">
              <tr>
                <th scope="col">N°</th>
                <th scope="col">Usuario</th>
                <th scope="col">Accion</th>
                <th scope="col">Fecha </th>
                <th scope="col">Descripcion</th>
              </tr>
            </thead>
            <tbody>
          <?php
            $sql = "SELECT
            b.Id_Bitacora,
            b.Fecha,
            u.Id_Usuario AS Usuario,
            b.Accion,
            b.Descripcion
        FROM tbl_bitacora b
        INNER JOIN tbl_ms_usuario u ON b.Id_Usuario = u.Id_Usuario";
            $resultado = mysqli_query($conexion, $sql);
            // Recorrer los resultados y mostrarlos en la tabla
            foreach ($resultado as $fila) {
              ?>
              <tr>
              <td>=CONCATENATE("N° ", ROW(), " - ", COLUMNS())</td>
              <td><?php echo $fila['Usuario'] ?></td>
              <td><?php echo $fila['Accion'] ?></td>
                <td><?php echo $fila['Fecha'] ?></td>

                <td><?php echo $fila['Descripcion'] ?></td>
                <!-- Botones Editar y Eliminar -->
<!-- Dentro del bucle foreach para mostrar los usuarios -->
         
              </tr>
          <?php 
            } 
          ?>
        </tbody>
          </table>
          <script>
    function generarNumeroCorrelativo(fila) {
  return fila + 1;
}

const tabla = document.getElementById("tablaAgenda");
const celdasNumero = tabla.querySelectorAll("td:first-child");

for (let i = 0; i < celdasNumero.length; i++) {
  const fila = i;
  const numeroCorrelativo = generarNumeroCorrelativo(fila);
  celdasNumero[i].textContent = numeroCorrelativo;
}

  </script>
  <style>
    #tablaAgenda td:first-child {
  text-align: right;
}

  </style>
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

   <!-- ----------------CODIGO PARA GENERAR REPORTES------------------>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <!-- ESTILOS DE LA TABLA -->
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script> <!-- MOSTRAR BOTONES DE REPORTE -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> LIBRERIA DE EXCEL  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> <!-- IMPRIME PDF -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> <!-- LIBRERIA PDF -->
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script> <!-- LIBRERIA HTML -->
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"> </script> <!-- ICONOS -->

  <?php
// Ruta de la imagen
$ruta_imagen = '../../Imagenes/logo3.jpeg';

// Verificar si el archivo existe
if (file_exists($ruta_imagen)) {
    // Leer el contenido de la imagen
    $contenido_imagen = file_get_contents($ruta_imagen);

    // Codificar la imagen en base64
    $ImagenBase64 = base64_encode($contenido_imagen);
}
?>

<script>
// REPORTE DE PARAMETROS 
$(document).ready(function () {
    $('#tablaAgenda').DataTable({
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
        },
        dom: 'lBfrtip',
        paging: true,
        buttons: [{
            extend: 'excelHtml5',
            text: '<i class="fas fa-file-excel"> Excel </i>',
            exportOptions: {
                columns: [0, 1, 2, 3, 4], // Índices de las columnas que quieres exportar
                modifier: {
                    page: 'current'
                },
            }
        },
        {
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf">  PDF </i>',
            orientation: 'portrait',
            customize: function (doc) {
                // Agregar un título al reporte
                var title = 'Reporte de Bitácora';
                // Obtener la fecha y hora actual
                var now = new Date();
                var date = now.getDate() + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
                var horas = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
                // Agregar el título y la fecha/hora al PDF
                doc.content.splice(1, 0, {
                    text: title,
                    fontSize: 15,
                    alignment: 'center'
                });
                doc.content.splice(2, 0, {
                    text: 'Fecha: ' + date + '\nHora: ' + horas,
                    alignment: 'left',
                    margin: [0, 10, 0, -70], // [left, top, right, bottom]
                });
                doc.content.splice(3, 0, {
                    
                    margin: [0, -40, 0, 20],
                    alignment: 'right',
                    image: 'data:image/jpeg;base64,<?php echo $ImagenBase64; ?> ',
                    width: 85,
                    height: 100,
                });

                doc["footer"] = function (currentPage, pageCount) {
                    return {
                        margin: 10,
                        columns: [{
                            fontSize: 10,
                            text: [{
                                text: "Página " +
                                    currentPage.toString() +
                                    " de " +
                                    pageCount,
                                alignment: "center",
                                bold: true
                            },],
                            alignment: "center",
                        },],
                    };
                };
            },
            exportOptions: {
                columns: [0, 1, 2, 3, 4],
                modifier: {
                    page: 'current'
                },
            }
        },
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "Todos"]
        ],
        "columnDefs": [{
            "targets": 0,
            "data": null,
            "defaultContent": "",
            "title": "N°", // Título de la columna
            "render": function (data, type, row, meta) {
                // Renderiza el número de fila
                return meta.row + 1;
            }
        }]
    });
});
</script>

</body>
</html>