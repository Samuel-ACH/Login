<?php
function bitacora($n,$a,$d){
    $conexion = mysqli_connect("localhost", "u452119581_adminred","T3chTit4n$2024", "u452119581_clinica_red"); 
    //$fecha = date("Y-m-d H:i:s");
    $bitacora = "INSERT INTO tbl_bitacora (Fecha, Id_Usuario, Accion, Descripcion)
                 VALUES (NOW(),$n, '$a', '$d') ORDER BY Fecha ASC";
    $agregar_bitacora = mysqli_query($conexion, $bitacora);    //almacena la consulta
    return $agregar_bitacora;
    // $conexion->close();
}
?>