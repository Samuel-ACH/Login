<?php
include 'Conexion_be.php';
include('../../Recursos/SweetAlerts.php');
//crear conexion

// Recibir datos del formulario
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo2'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$fechanacimiento = date("Y-m-d", strtotime($_POST['fechanacimiento']));
$fechacontratacion = date("Y-m-d", strtotime($_POST['fechacontratacion']));
$estadousuario = $_POST['estadoUser'];
$contrasena = $_POST['password2'];
$confirmacion_contrasena = $_POST['password3'];
$clave_encriptada = md5($confirmacion_contrasena);
$idrol = $_POST['rol'];
$idgenero = $_POST['genero'];
// $fechavencimiento = date("Y-m-d", strtotime($_POST['fecha_vencimiento']));
// $creadopor = $_POST['creado_por'];


                       //Insertar nuevo usuario en la base de datos
                        $query = "INSERT INTO tbl_ms_usuario (DNI, Usuario, Correo, Nombre, Direccion, FechaNacimiento, FechaContratacion, 
                                    Estado_Usuario, Contrasena, IdRol, IdGenero) 
                                    VALUES ('$dni', '$usuario', '$correo', '$nombre', '$direccion', '$fechanacimiento', 
                                    '$fechacontratacion', '$estadousuario', '$clave_encriptada', '$idrol', '$idgenero')";


$resultado_query = mysqli_query($conexion, $query);
if ($resultado_query) { // Validar que se insertó correctamente el registro
    echo '
        <script>
            MostrarAlerta("success", "¡GENIAL!", "Usuario almacenado correctamente.", "../Vistas/Usuario.php");
        </script>
    ';
} else {
    echo '
        <script>
            MostrarAlerta("error", "ERROR", "Inténtalo de nuevo, usuario no almacenado.", "../Vistas/nuevoregistrousr.php");
        </script>
    ';
    exit();
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
