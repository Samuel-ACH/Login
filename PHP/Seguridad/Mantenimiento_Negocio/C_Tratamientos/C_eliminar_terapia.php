<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
include('../../../Controladores/bitacora.php');

$Id_Terapia_E = $_POST['idTipoTerapia'];

$sql = "DELETE FROM tbl_tipo_terapia WHERE idTipoTerapia = '$Id_Terapia_E'";

    echo $resultado = mysqli_query($conexion, $sql);
    $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    $a='ELIMINAR';
    $d="SE HA ELIMINADO EL TIPO DE TRATAMIENTO CON ID ". $Id_Terapia_E.".";
    bitacora($n, $a, $d);
