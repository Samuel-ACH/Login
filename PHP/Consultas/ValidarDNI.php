<?php
require_once('../Controladores/conexiondb.php');

$arreglo_tbl_bd = array(
    "tbl_bitacora",
    "tbl_cita_terapeutica",
    "tbl_contacto_paciente",
    "tbl_contacto_usuario",
    "tbl_detalle_expediente",
    "tbl_detalle_terapia",
    "tbl_detalle_terapia_tratamiento",
    "tbl_dia_feriado",
    "tbl_estado_cita",
    "tbl_evaluacion",
    "tbl_expediente",
    "tbl_genero",
    "tbl_horario",
    "tbl_ms_hist_contrasena",
    "tbl_ms_objetos",
    "tbl_ms_parametros",
    "tbl_ms_permisos",
    "tbl_ms_roles",
    "tbl_ms_usuario",
    "tbl_observacion_fisioterapeuta",
    "tbl_paciente",
    "tbl_pin",
    "tbl_resultado_evaluacion",
    "tbl_resultado_expediente",
    "tbl_terapia_expediente",
    "tbl_tipo_cita",
    "tbl_tipo_contacto",
    "tbl_tipo_distribucion",
    "tbl_tipo_documento",
    "tbl_tipo_terapia",
    "tbl_tipo_tratamiento"
);

// Imprimir el arreglo
// print_r($tablas);

// Recibir el DNI desde la solicitud POST
if (isset($_POST["dni"])) {
    $dni = $_POST["dni"];

    // Ejecutar la consulta SQL
    $sql = "SELECT COUNT(*) as count FROM tbl_ms_usuario WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();

    // Enviar la respuesta al usuario
    if ($count > 0) {
        // El DNI ya existe
        echo "existe";
    } else {
        // El DNI no existe
        echo "ok";
    }

    $stmt->close();
} else {
    // Si no se proporciona un DNI, devuelve un mensaje de error
    echo "error";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
