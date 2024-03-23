<?php
include("../../../Controladores/Conexion/Conexion_be.php");
// include("../../../../Imagenes/base64.php");
?>

<div class="row">
    <div class="col-sm-12">
        <!-- <table class="table table-hover table-condensed table-bordered" id="tablaParametrosLoad"> -->
        <table id="tablaParametrosLoad" class="table">        
            <!-- <br><h2>Mantenimiento de Parámetros</h2> -->
            <button class="btn btn-primary btn-agregar" data-toggle="modal" data-target="#modalNuevoParametro">
                <i class="fa-solid fa-plus"></i> Agregar Parámetro</button>

                <thead class="encabezado bg-light table-info">
                <tr>
                    <td>N°</td>
                    <td>Parámetro</td>
                    <td>Valor</td>
                    <td>Fecha Creación</td>
                    <td>Acciones</td>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT p.Id_Parametro, p.Parametro, p.Valor, u.Nombre, p.Fecha_Creacion, u.Nombre AS Modificado_Por, p.Fecha_Modificacion 
                            FROM tbl_ms_usuario AS u INNER JOIN tbl_ms_parametros AS p ON u.Id_Usuario = p.Id_Usuario";
                $resultado = mysqli_query($conexion, $sql);
                $correlativo = 1; // Inicializamos el correlativo en 1
                while ($filas = mysqli_fetch_row($resultado)) {
                    $datos = $filas[0] . "||" . $filas[1] . "||" . $filas[2] . "||" . $filas[3] . "||" . $filas[4] . "||" . $filas[5] . "||" . $filas[6];
                ?>

                    <tr>
                        <td><?php echo $correlativo ?></td>
                        <td><?php echo $filas[1] ?></td>
                        <td><?php echo $filas[2] ?></td>
                        <td><?php echo $filas[4] ?></td>
                        <td>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalVerParametro" onclick="cargarDatosLectura('<?php echo $datos; ?>')">
                                <i class="fa-solid fa-eye"></i></button>

                            <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditarParametro" onclick="cargarDatos('<?php echo $datos; ?>')">
                                <i class="fa-solid fa-pen-to-square"></i></button>

                            <button class="btn btn-danger" onclick="validarSiNo('<?php echo $filas[0]; ?>')"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                <?php 
                    $correlativo++; // Incrementamos el correlativo en cada iteración
                } // fin del ciclo while
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
// Ruta de la imagen
$ruta_imagen = '../../../../Imagenes/logo3.jpeg';

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
    $('#tablaParametrosLoad').DataTable({
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
        },
        dom: 'lBfrtip',
        paging: true,
        buttons: [{
            extend: 'excelHtml5',
            text: '<i class="fas fa-file-excel"> Excel </i>',
            exportOptions: {
                columns: [0, 1, 2, 3], // Índices de las columnas que quieres exportar
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
                var title = 'Reporte de Parámetros';
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
                columns: [0, 1, 2, 3],
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