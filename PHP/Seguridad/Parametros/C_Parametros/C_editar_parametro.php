<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
// include('../../../Controladores/bitacora.php');

$Id_Parametro = $_POST['Id_Parametro'];
$valorParametroE = $_POST['valorParametroE'];

$sql = "UPDATE tbl_ms_parametros SET Valor = '$valorParametroE', Modificado_Por = 15, Fecha_Modificacion = NOW()
        WHERE Id_Parametro = '$Id_Parametro'";

    echo $resultado = mysqli_query($conexion, $sql);
    // $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    // $a='EDITAR';
    // $d="SE HA EDITADO EL PARAMETRO CON EL ID ". $Id_Parametro.".";
    // bitacora($n, $a, $d);
?>