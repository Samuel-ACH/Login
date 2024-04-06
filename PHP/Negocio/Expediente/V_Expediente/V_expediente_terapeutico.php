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
                                    <!-- <label for="telefono">TELÉFONO:</label>
                                    <input type="text" class="formulario__input" readonly id="telefono" name="telefono"> -->
                                    <label for="edad">EDAD:</label>
                                    <input type="text" class="formulario__input" readonly id="edad" name="edad">
                                    <label for="fisiatra">EVALUADOR:</label>
                                    <input type="text" class="formulario__input" readonly id="fisiatra" name="fisiatra">
                                    <label for="motivoConsulta">MOTIVO DE CONSULTA:</label>
                                    <input type="text" class="formulario__input" readonly id="motivoConsulta" name="motivoConsulta">
                                    <label for="numero_sesiones">N° SESIONES:</label>
                                    <input type="text" class="formulario__input" placeholder="Por favor, llenar este campo" id="numero_sesiones" name="numero_sesiones">
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
                    <div id="contenedor-tarjetas-columna1">
                        <!-- Las tarjetas de la columna 1 se agregarán aquí -->
                    </div>
                </div>
            </div>

            <!-- Segunda columna -->
            <div class="col-md-6">
                <div class="contenedor-tarjetas-columna">
                    <div id="contenedor-tarjetas-columna2">
                        <!-- Las tarjetas de la columna 2 se agregarán aquí -->
                    </div>
                </div>
            </div>
        </div><hr>

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
                // Cerrar el formulario
                 $conexion->close();
                ?>
            </select>
            <p id="mensajeGenero2" class="mensaje_error" style="color: #bb2929;"></p>
        </div>

            <form action="../C_Expediente/C_procesar_tarjeta.php" method="POST">
                <button type="submit" name="guardar_todo">Guardar Todo</button>
            </form>
        
            <!-- Importar el archivo JavaScript -->
            <script src="../C_Expediente/C_mostrar_tarjetas.js"></script>
        
    </main>

    <script>
    function cerrarTarjeta(idTarjeta) {
        var tarjeta = document.getElementById(idTarjeta);
        tarjeta.style.display = 'none'; // Oculta la tarjeta
        // Alternativamente, puedes eliminar la tarjeta del DOM con:
        // tarjeta.parentNode.removeChild(tarjeta);
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