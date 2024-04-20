<?php
$servername = "roundhouse.proxy.rlwy.net";
$username = "root";
$password = "jPaDrwRuxJgKeZgRjCmjQxqaKcCORJDa";
$dbname = "Clinica_Red";
$Port = "48563";

$conn = new mysqli($servername, $username, $password, $dbname, $Port);

// Conexión a la base de datos Local
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "clinica_red2";
// // Local
// $conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conn->begin_transaction();

try {
    // Bloquear el registro que deseas proteger
    $id_registro = 1; // Reemplaza con el ID del registro que quieres bloquear
    $sql = "SELECT * FROM tbl_ms_usuario WHERE Id_Usuario = $id_registro FOR UPDATE";
    $result = $conn->query($sql);

    // Realizar otras operaciones si es necesario

    // Confirmar la transacción
    $conn->commit();
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
// $conn->close();

