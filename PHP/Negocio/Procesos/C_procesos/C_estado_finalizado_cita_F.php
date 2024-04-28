<?php
// Verificar si la sesión ya está activa
if (session_status() === PHP_SESSION_ACTIVE) {
    // La sesión ya está iniciada, no necesitas iniciarla nuevamente
} else {
    // La sesión aún no está iniciada, entonces la inicias
    session_start();
}

// Verificar si se ha confirmado el envío del formulario
if (isset($_POST['guardarDatos'])) {
    // Realizar la actualización del estado de la cita en la base de datos
    include '../../../Controladores/Conexion/Conexion_be.php';
    
    // Obtener el ID de la cita
    if (isset($_POST['Id_Cita'])) {
        $idCita = $_POST['Id_Cita'];
        
        // Sanitizar el ID de la cita si es necesario (por ejemplo, si estás usando mysqli_real_escape_string())
        // $idCita = mysqli_real_escape_string($conexion, $idCita);

        // Actualizar el estado de la cita a través de una consulta SQL
        $sql = "UPDATE tbl_cita_terapeutica SET Id_Estado_Cita = 4 WHERE id_Cita_Terapia = '$idCita'";

        if (mysqli_query($conexion, $sql)) {
            // Éxito: redirigir al usuario a una página de confirmación o a donde sea necesario
            header("Location: ../../../Vistas/Main.php");
            exit; // Es una buena práctica agregar exit después de redirigir para evitar que se ejecute más código
        } else {
            // Error al actualizar el estado de la cita
            echo "Error al actualizar el estado de la cita: " . mysqli_error($conexion);
        }
    } else {
        // Si no se recibió el ID de la cita, muestra un mensaje de error o realiza alguna otra acción necesaria
        echo "No se recibió el ID de la cita";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    // Si no se ha confirmado el envío del formulario, realiza alguna otra acción necesaria o muestra un mensaje de error
    echo "No se ha confirmado el envío del formulario";
}
?>
