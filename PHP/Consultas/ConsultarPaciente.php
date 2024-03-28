<?php
// Datos de conexión a la base de datos
include('../Controladores/Conexion/conexiondb.php');

// Consulta para verificar si el usuario existe
$DNI = $_POST['DNI']; // Suponiendo que obtienes el nombre de usuario del formulario
// $DNI = '080200119431';
$sql = "SELECT Id_Paciente, Nombre FROM tbl_paciente WHERE Numero_Documento = '$DNI'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // Usuario encontrado, cargar el nombre y el ID
    $fila = $resultado->fetch_assoc();
    $Id_Paciente = $fila["Id_Paciente"];
    $Nombre = $fila["Nombre"];
    
    // echo "ID del paciente: " . $Id_Paciente . "<br>";
    // echo "Nombre del paciente: " . $Nombre;
} else {
    echo "El paciente no existe, favor registrarlo.";
}
$conn->close();
?>
