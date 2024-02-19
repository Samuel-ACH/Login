<?php

session_start();
session_destroy();
header("location: ../Vistas/Index.php");

?>