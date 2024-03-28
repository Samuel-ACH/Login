<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');

$idCita_E = $_POST['idCita_E'];
$motivoCita = strtoupper($_POST['motivoCita_E']);
$fechaCita = date("Y-m-d", strtotime($_POST['fechaCita_E']));
$horaCita = $_POST['horaCita_E'];
// $id_Paciente = $_POST['nombrePaciente'];
$id_Usuario = $_SESSION['id_D'];
$id_Tipo_Cita = $_POST['tipoCita_E'];
$id_Doctor = $_POST['nombreDoctor_E'];

$sql = "UPDATE tbl_cita_terapeutica SET Descripcion_Cita = '$motivoCita', Fecha_Cita = '$fechaCita', Hora_Cita = '$horaCita',
                                        Id_Usuario = '$id_Usuario', Id_Tipo_Cita = '$id_Tipo_Cita', Id_Doctor = '$id_Doctor'
                                        WHERE id_Cita_Terapia = '$idCita_E'";

    echo $resultado = mysqli_query($conexion, $sql);
?>