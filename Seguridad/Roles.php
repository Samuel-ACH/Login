<?php

session_start();

$roles_permitidos = ['SUPERADMINISTRADOR', 'DEFECTO', 'USUARIO'];

if(!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $roles_permitidos))
    header("Location: ../Vistas/Index.php")
?>