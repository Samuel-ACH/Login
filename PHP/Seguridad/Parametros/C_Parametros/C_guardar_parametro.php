<?php
include('../../../Controladores/Conexion/Conexion_be.php');

$parametro = strtoupper($_POST['parametro']);
$valor = $_POST['valorParametro'];

$sql = "INSERT INTO tbl_ms_parametros (Parametro, Valor, Id_Usuario, Fecha_Creacion, Modificado_Por, Fecha_Modificacion)
        VALUES ('$parametro', '$valor', 1, NOW(), 1, NOW())";

    echo $resultado = mysqli_query($conexion, $sql);
?>