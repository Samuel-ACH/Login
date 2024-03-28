<?php
include '../../../Controladores/Conexion/Conexion_be.php';

// Recibir el DNI del POST y escapar el valor para prevenir inyección SQL
$dni = mysqli_real_escape_string($conexion, $_POST['dni']);

// Realizar la consulta preparada para obtener el nombre asociado al DNI
$query = "SELECT Id_Paciente, Nombre FROM tbl_paciente WHERE Numero_Documento = ?";
$stmt = mysqli_prepare($conexion, $query);
mysqli_stmt_bind_param($stmt, "s", $dni);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener el primer (y único) resultado
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila) {
        // Obtener el nombre del resultado
        $nombre = $fila['Nombre'];
        $id_paciente = intval($fila['Id_Paciente']);
    } else {
        // No se encontraron resultados para el DNI proporcionado
        $nombre = "No se encontró el paciente"; // Mensaje de error más descriptivo
    }
} else {
    // Hubo un error en la consulta SQL
    $nombre = "Error en la consulta SQL: " . mysqli_error($conexion); // Mensaje de error más descriptivo
}

// Imprimir el nombre (o enviarlo de vuelta como JSON si prefieres)
echo $nombre . "||" . $id_paciente;
// Liberar resultado
mysqli_free_result($resultado);

// Cerrar consulta preparada
mysqli_stmt_close($stmt);

// Cerrar conexión
mysqli_close($conexion);
?>