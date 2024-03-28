<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');

$id_Cita = $_POST['idCita_E'];
$motivoCita = strtoupper($_POST['motivoCita']);
$fechaCita = date("Y-m-d", strtotime($_POST['fechaCita']));
$horaCita = $_POST['horaCita'];
// $id_Paciente = $_POST['nombrePaciente'];
$id_Usuario = $_SESSION['id_D'];
$id_Tipo_Cita = $_POST['tipoCita'];
$id_Doctor = $_POST['nombreDoctor'];

$sql = "UPDATE tbl_cita_terapeutica SET Descripcion_Cita = '$motivoCita', Fecha_Cita = '$fechaCita', Hora_Cita = '$horaCita',
                                        Id_Usuario = '$id_Usuario', Id_Tipo_Cita = '$id_Tipo_Cita', Id_Doctor = '$id_Doctor'
                                        WHERE id_Cita_Terapia = '$id_Cita'";

    echo $resultado = mysqli_query($conexion, $sql);
?>