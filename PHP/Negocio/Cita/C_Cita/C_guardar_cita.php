<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');

$motivoCita = strtoupper($_POST['motivoCita']);
$fechaCita = date("Y-m-d", strtotime($_POST['fechaCita']));
$horaCita = $_POST['horaCita'];
$id_Paciente = $_POST['Id_Paciente'];
$id_Usuario = $_SESSION['id_D'];
$id_Tipo_Cita = $_POST['tipoCita'];
$subespecialidad = $_POST['subespecialidad'];

$sql = "INSERT INTO tbl_cita_terapeutica (Descripcion_Cita, Fecha_Registro, Fecha_Cita, Hora_Cita, Id_Paciente, Id_Usuario, Id_Tipo_Cita, Id_Especialista)
        VALUES ('$motivoCita', NOW(), '$fechaCita', '$horaCita', '$id_Paciente', '$id_Usuario', '$id_Tipo_Cita', '$subespecialidad')";

    echo $resultado = mysqli_query($conexion, $sql);
    
?>