<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Bitácora</title>
    <!-- Agregar las bibliotecas de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        label {
            display: block;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    <!-- Agregar el panel de control de Bootstrap -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Formulario de Bitácora</h2>
                    </div>
                    <div class="card-body">

                        <!-- Formulario de Bitácora -->
                            <div class="form-group">
                                <label for="objeto">Objeto:</label>
                                <input type="text" class="form-control" name="objeto" required>
                            </div>

                            <div class="form-group">
                                <label for="tipo_objeto">Tipo Objeto:</label>
                                <input type="text" class="form-control" name="tipo_objeto" required>
                            </div>

                            <div class="form-group">
                                <label for="creado_por">Creado Por:</label>
                                <input type="text" class="form-control" name="creado_por" required>
                            </div>

                            <div class="form-group">
                                <label for="fecha_creacion">Fecha Creación:</label>
                                <input type="datetime-local" class="form-control" name="fecha_creacion" required>
                            </div>

                            <div class="form-group">
                                <label for="modificado_por">Modificado Por:</label>
                                <input type="text" class="form-control" name="modificado_por" required>
                            </div>

                            <div class="form-group">
                                <label for="fecha_modificacion">Fecha y Hora de Modificación:</label>
                                <input type="datetime-local" class="form-control" name="fecha_modificacion" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Agregar Registro</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir las bibliotecas de Bootstrap y jQuery al final del cuerpo para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
