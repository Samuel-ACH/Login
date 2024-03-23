<?php
include('../../../Controladores/Conexion/Conexion_be.php');

$Id_Parametro = $_POST['Id_Parametro'];

$sql = "DELETE FROM tbl_ms_parametros WHERE Id_Parametro = '$Id_Parametro'";

    echo $resultado = mysqli_query($conexion, $sql);
?>