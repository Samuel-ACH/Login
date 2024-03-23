 <?php
 include '../Controladores/Conexion_be.php';
// include '../Controladores/Perfil/PerfilController.php';
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
   <!-- Agregar enlaces a Bootstrap CSS -->
     <!-- Vendor CSS Files -->
     <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    </head>


    <style>
        /* Estilos adicionales */
        .card {
            border-radius: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            border-bottom: none;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 15px 20px;
        }

        .card-header h5 {
            margin-bottom: 0;
        }

        .card-body {
            padding: 30px;
        }

        .list-group-item {
            border: none;
            padding: 10px 0;
        }

        .list-group-item strong {
            width: 150px;
            display: inline-block;
        }

        .change-image-icon {
            font-size: 2rem;
            color: #007bff;
            cursor: pointer;
        }

        .change-image-text {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card ">
        <h5 class="card-title"><i class="fas fa-user fa-3x mr-2"></i>Perfil de Usuario</h5>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
            <<i class="fas fa-camera change-image-icon" onclick="cambiarImagen()"></i>
                        <p>Imagen de Perfil</p>
                        <img id="imagenPerfil" src="../../assets/img/user-profile.png" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-8">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nombre completo:</strong> 
                            <li class="list-group-item"><strong>Correo electrónico:</strong> 
                            <li class="list-group-item"><strong>DNI:</strong> 
                            <li class="list-group-item"><strong>Correo electrónico:</strong> 
                            <li class="list-group-item"><strong>Dirección:</strong> 
                        </ul>
                        <button id="btncerrarperfil" class="btn btn-danger" onclick="cerrarPerfil()">Cerrar Perfil</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function cerrarPerfil() {
            // Redirigir al usuario a la página de cierre de sesión
            window.location.href = "Main.php";
        }

        function cambiarImagen() {
            // Obtener el input de tipo file
            var inputFile = document.createElement('input');
            inputFile.type = 'file';

            // Escuchar cambios en el input de tipo file
            inputFile.addEventListener('change', function(event) {
                var imagenPerfil = document.getElementById('imagenPerfil');
                var file = event.target.files[0];
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagenPerfil.src = e.target.result;
                };

                reader.readAsDataURL(file);
            });

            // Simular click en el input de tipo file
            inputFile.click();
        }
    </script>
</body>
</html>
