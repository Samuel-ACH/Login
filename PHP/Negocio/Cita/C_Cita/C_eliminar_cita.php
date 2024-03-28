<?php
include('../../../Controladores/Conexion/Conexion_be.php');

$id_Cita = $_POST['idCita_L'];

$sql = "DELETE FROM tbl_cita_terapeutica WHERE id_Cita_Terapia = '$id_Cita'";

    echo $resultado = mysqli_query($conexion, $sql);
?>