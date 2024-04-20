<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
include('../../../Controladores/bitacora.php');

$id_Cita = $_POST['idCita_L'];

$sql = "UPDATE tbl_cita_terapeutica SET Id_Estado_Cita = 2 WHERE id_Cita_Terapia = '$id_Cita'";
    echo $resultado = mysqli_query($conexion, $sql);
    $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    $a='MODIFICADO';
    $d='EL ESTADO DE LA CITA '. $id_Cita .' HA SIDO MODIFICADO DE "PENDIENTE" A "ESPERA". ';
    bitacora($n, $a, $d);
?>