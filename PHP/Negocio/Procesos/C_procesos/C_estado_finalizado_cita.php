<?php
// Verificar si la sesión ya está activa
if (session_status() === PHP_SESSION_ACTIVE) {
    // La sesión ya está iniciada, no necesitas iniciarla nuevamente
} else {
    // La sesión aún no está iniciada, entonces la inicias
    session_start();
}

// Verificar si se ha confirmado el envío
if (isset($_POST['guardarDatos'])) {
    // Realizar la actualización del estado de la cita en la base de datos
    include '../../../Controladores/Conexion/Conexion_be.php';
    // include('../../../Controladores/bitacora.php');

    if (isset($_SESSION['datosPaciente'])) {
        // Obtener los datos del paciente de las variables de sesión
        $datosArray = $_SESSION['datosPaciente'];

        // Obtener el ID de la cita
        $idCita = $datosArray[0];

        // Actualizar el estado de la cita a través de una consulta SQL
        $sql = "UPDATE tbl_cita_terapeutica SET Id_Estado_Cita = 4 WHERE id_Cita_Terapia = '$idCita'";

        if (mysqli_query($conexion, $sql)) {
            // echo "El estado de la cita se ha actualizado correctamente.";
            header("Location: ../../../Vistas/Main.php");
            // $n = $_SESSION['id_D'];          //obtiene valor de la variable sesion
            // $a = 'FINALIZAR';
            // $d = "LA CITA CON ID " . $idCita . " SE HA FINALIZADO.";
            // bitacora($n, $a, $d);
        } else {
            echo "Error al actualizar el estado de la cita: " . mysqli_error($conexion);
        }
        // Cerrar la conexión
        mysqli_close($conexion);
        // Limpiar las variables de sesión después de utilizar los datos
        unset($_SESSION['datosPaciente']);
    }
}
