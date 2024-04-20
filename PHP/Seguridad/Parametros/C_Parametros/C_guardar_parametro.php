<?php
session_start();
include('../../../Controladores/Conexion/Conexion_be.php');
include('../../../Controladores/bitacora.php');

$parametro = strtoupper($_POST['parametro']);
$valor = $_POST['valorParametro'];

$sql = "INSERT INTO tbl_ms_parametros (Parametro, Valor, Id_Usuario, Fecha_Creacion, Modificado_Por, Fecha_Modificacion)
        VALUES ('$parametro', '$valor', 1, NOW(), 1, NOW())";

    echo $resultado = mysqli_query($conexion, $sql);
    $n=$_SESSION['id_D'];          //obtiene valor de la variable sesion
    $a='AGREGAR';
    $d="SE HA AGREGADO EL PARAMETRO ". $parametro.".";
    bitacora($n, $a, $d);
?>