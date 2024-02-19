<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
 <title>Conexion SQL</title>
</head>
<body>
<?php
$enlace = mysqli_connect("localhost","root","","clinica_red");
if(!$enlace){
die("No se puede contectar a la base de datos" . mysqli_error($enlace));
}
echo "Conexion exitosa";
mysqli_close($enlace);
?>
</body>
</html>
