<?php
include('../../../Controladores/Conexion/Conexion_be.php');

$Id_Parametro = $_POST['Id_Parametro'];
$valorParametroE = $_POST['valorParametroE'];

$sql = "UPDATE tbl_ms_parametros SET Valor = '$valorParametroE', Modificado_Por = 15, Fecha_Modificacion = NOW()
        WHERE Id_Parametro = '$Id_Parametro'";

    echo $resultado = mysqli_query($conexion, $sql);
?>