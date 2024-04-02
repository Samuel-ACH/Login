<?php
include '../../../Controladores/Conexion/Conexion_be.php';
include('../../../../Recursos/SweetAlerts.php');
include('../../../Controladores/bitacora.php');
session_start();
//crear conexion

// Recibir datos del formulario de nuevo paciente
$nombre = strtoupper($_POST['nombre']);
$direccion = strtoupper($_POST['direccion']);
$fechanacimiento = date("Y-m-d", strtotime($_POST['fechanacimiento']));
$idgenero = $_POST['genero'];
$idtipodocumento = $_POST['id_tipo_documento'];
$numerodocumento = $_POST['numero_de_documento'];
$estadopaciente = $_POST['estadoPaciente'];
$ocupacionpaciente = $_POST['ocupacion'];

//Insertar nuevo usuario en la base de datos
$query = "INSERT INTO tbl_paciente (Nombre, Direccion, FechaNacimiento, IdGenero, Id_Tipo_Documento, Numero_Documento, Estado_Paciente, Ocupacion) 
          VALUES ('$nombre', '$direccion', '$fechanacimiento','$idgenero','$idtipodocumento','$numerodocumento','$estadopaciente', '$ocupacionpaciente')";

$resultado_query = mysqli_query($conexion, $query);
if ($resultado_query) {
    // $n=$_SESSION['id_D'];          //obtiene valor de la variable session
    // $a='AGREGAR USUARIO';
    // $d='USUARIO '. $usuario .' FUE AGREGADO';
    // bitacora($n, $a, $d);
    echo '
        <script>
            MostrarAlerta("success", "¡GENIAL!", "Paciente almacenado correctamente.", "../V_Paciente/V_Paciente.php");
        </script>
    ';
} else {
    echo '
        <script>
            MostrarAlerta("error", "ERROR", "Inténtalo de nuevo, paciente no almacenado.", "../V_Paciente/V_nuevo_paciente.php");
        </script>
    ';
    exit();
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>