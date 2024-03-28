<?php
include '../../../Controladores/Conexion/Conexion_be.php';

// Recibir el DNI del POST
$dni = $_POST['dni'];

// Realizar la consulta para obtener el nombre asociado al DNI
$query = "SELECT nombre FROM tbl_paciente WHERE Numero_Documento = '$dni'";
$resultado = mysqli_query($conexion, $query);

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener el primer (y único) resultado
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        // Obtener el nombre del resultado
        $nombre = $fila['nombre'];
    } else {
        // No se encontraron resultados para el DNI proporcionado
        $nombre = "No se Encontro Paciente"; // Asignar un valor por defecto
    }
} else {
    // Hubo un error en la consulta SQL
    $nombre = "Falla en la consulta SQL"; // Asignar un valor por defecto
}

// Imprimir el nombre (o enviarlo de vuelta como JSON si prefieres)
echo $nombre; // Esto enviará el nombre de vuelta a la solicitud AJAX

// Liberar resultado
mysqli_free_result($resultado);

// Cerrar conexión
mysqli_close($conexion);

?>