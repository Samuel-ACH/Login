<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
include('../../../Controladores/bitacora.php');

$Id_Resultado_Evaluacion = $_POST['Id_Resultado_Evaluacion'];

$sql = "DELETE FROM tbl_resultado_evaluacion WHERE Id_Resultado_Evaluacion = '$Id_Resultado_Evaluacion'";

    echo $resultado = mysqli_query($conexion, $sql);
    $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    $a='ELIMINAR';
    $d="SE HA ELIMINADO EL TIPO DE EXAMEN CON EL ID ". $Id_Resultado_Evaluacion.".";
    bitacora($n, $a, $d);
?>