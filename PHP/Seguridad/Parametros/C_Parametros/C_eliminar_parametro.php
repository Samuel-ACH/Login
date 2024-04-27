<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
// include('../../../Controladores/bitacora.php');

$Id_Parametro = $_POST['Id_Parametro'];

$sql = "DELETE FROM tbl_ms_parametros WHERE Id_Parametro = '$Id_Parametro'";

    echo $resultado = mysqli_query($conexion, $sql);
    // $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    // $a='ELIMINAR';
    // $d="SE HA ELIMINADO EL PARAMETRO CON ID ". $Id_Terapia_E.".";
    // bitacora($n, $a, $d);
?>