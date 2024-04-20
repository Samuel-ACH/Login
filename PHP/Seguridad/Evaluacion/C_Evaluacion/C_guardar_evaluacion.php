<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
include('../../../Controladores/bitacora.php');

$descripcion = strtoupper($_POST['descripcion']);


$sql = "INSERT INTO tbl_evaluacion (Descripcion) VALUES ('$descripcion')";

    echo $resultado = mysqli_query($conexion, $sql);
    $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    $a='AGREGAR';
    $d="SE HA AGREGADO EL TIPO DE EXAMEN ". $descripcion.".";
    bitacora($n, $a, $d);
?> 