<?php
// Verificar si la sesión ya está activa
if (session_status() === PHP_SESSION_ACTIVE) {
    // La sesión ya está iniciada, no necesitas iniciarla nuevamente
} else {
    // La sesión aún no está iniciada, entonces la inicias
    session_start();
}

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibió el ID de la cita
    if (isset($_POST['Id_Cita'])) {
        // Obtener el ID de la cita enviado desde el cliente
        $idCita = $_POST['Id_Cita'];

        // Actualizar el estado de la cita a través de una consulta SQL
        $sql = "UPDATE tbl_cita_terapeutica SET Id_Estado_Cita = 4 WHERE id_Cita_Terapia = '$idCita'";

        // Si la actualización fue exitosa, puedes enviar una respuesta al cliente
        $respuesta = array('success' => true, 'message' => 'Estado de la cita actualizado correctamente');
        echo json_encode($respuesta);
    } else {
        // Si no se recibió el ID de la cita, enviar una respuesta de error al cliente
        $respuesta = array('success' => false, 'message' => 'No se recibió el ID de la cita');
        echo json_encode($respuesta);
    }
} else {
    // Si la solicitud no es de tipo POST, enviar una respuesta de error al cliente
    $respuesta = array('success' => false, 'message' => 'Solicitud no válida');
    echo json_encode($respuesta);
}
