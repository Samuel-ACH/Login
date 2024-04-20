<?php
include('./bitacora.php');
session_start();
$u=$_SESSION['usuario'];
$n= $_SESSION['id_D'];
$a='CIERRE DE SESIÓN';
$d= $_SESSION['usuario'].' FINALIZÓ SESIÓN.';
session_destroy();
bitacora($n,$a,$d); 
header("location: api/Index.php");

