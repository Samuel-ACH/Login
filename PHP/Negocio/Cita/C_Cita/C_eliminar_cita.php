<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
include('../../../Controladores/bitacora.php');

$id_Cita = $_POST['idCita_L'];

$sql = "UPDATE tbl_cita_terapeutica SET Id_Estado_Cita = 5 WHERE id_Cita_Terapia = '$id_Cita'";
    echo $resultado = mysqli_query($conexion, $sql);
    $n=$_SESSION['id_D'];          //obtiene valor de la variable session
    $a='CANCELAR';
    $d='CITA '. $id_Cita .' FUE CANCELADA';
    bitacora($n, $a, $d);
?>