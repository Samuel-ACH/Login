
<?php
session_start();
include '../../../Controladores/Conexion/Conexion_be.php';
include('../../../Controladores/bitacora.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idPaciente = $_POST['idPaciente'];
    $nombre = strtoupper($_POST["nombre"]);
    $genero = $_POST["genero"];
    $fechanacimiento = $_POST["fechanacimiento"];
    $direccion = strtoupper($_POST["direccion"]);
    $idtipodocumento = $_POST["tipo_documento"];
    $numerodocumento = $_POST["numero_de_documento"];
    $ocupacionpaciente = strtoupper($_POST["ocupacion"]);
    $estado = 1 ;
        
    //$fechamodificacion = date('Y-m-d'); // Fecha de modificación

    // Actualizar los datos del paciente en la base de datos
    $actualizarPacienteQuery = "UPDATE tbl_paciente SET 
    Nombre = ?, FechaNacimiento = ?, Direccion = ?, Ocupacion = ?, Id_Tipo_Documento = ?, 
    Numero_Documento = ?, Estado_Paciente = ?, IdGenero = ? WHERE Id_Paciente = ?";
    $stmt = mysqli_prepare($conexion, $actualizarPacienteQuery);
    mysqli_stmt_bind_param($stmt, "ssssisiis", $nombre,$fechanacimiento,$direccion,$ocupacionpaciente,$idtipodocumento,$numerodocumento,$estado,$genero,$idPaciente);

    if (mysqli_stmt_execute($stmt)) {
         // Mensaje de éxito
         // $mensajeExito = "¡Los cambios se han guardado exitosamente!";
                 
        // Redireccionar a la página principal o mostrar un mensaje de éxito
        header("Location: ../V_Paciente/V_paciente.php");
        $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
        $a='EDITAR';
        $d='PACIENTE CON EL ID '. $idPaciente.' HA SIDO EDITADO ';
        bitacora($n, $a, $d);
        exit();
    } else {
        echo "Error al guardar los cambios: " . mysqli_error($conexion);
    }
   
    mysqli_stmt_close($stmt);
}
?>

