<!-- <?php
// // PerfilController.php
// // Incluir el archivo de configuración de la base de datos y cualquier otra lógica necesaria
// include('Conexion_be.php');
// session_start(); // Iniciar la sesión (si no lo has hecho aún)
// $usuario = $_SESSION['Id_Usuario']; // Suponiendo que el ID del usuario está almacenado en $_SESSION
// $usuario = obtenerDatosUsuario($usuario);

// // Función para obtener los datos del usuario que ha iniciado sesión
// function obtenerDatosUsuario($usuario) {
//     // Realizar la consulta para obtener los datos del usuario
//     global $pdo; // asumiendo que $pdo es tu conexión PDO a la base de datos
    
//     $sql = "SELECT Nombre, Correo,Usuario, Direccion, FROM tbl_ms_usuario ;
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':id', $usuario, PDO::PARAM_INT);
//     $stmt->execute();
    
//     // Obtener los datos del usuario
//     $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
//     return $usuario;
// }

?> -->
<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['Id_Usuario'])) {
    // Redirigir al usuario a la página de inicio de sesión si no está logueado
    header("Location: Index.php");
    exit(); // Terminar el script para evitar que se ejecute el resto del código
}

// Incluir el archivo de conexión a la base de datos
include '../Controladores/Conexion_be.php';

// Obtener el ID del usuario logueado
$Id_Usuario = $_SESSION['Id_Usuario'];

// Consulta SQL para obtener los datos del usuario logueado
$sql = "SELECT Nombre, DNI, Correo, Direccion FROM tbl_ms_usuario WHERE Id_Usuario = $Id_Usuario";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar si se encontraron resultados
if ($resultado && mysqli_num_rows($resultado) > 0) {
    // Obtener los datos del usuario
    $datosUsuario = mysqli_fetch_assoc($resultado);
} else {
    // Si no se encontraron resultados, puedes mostrar un mensaje de error o manejarlo de otra manera
    $datosUsuario = array(); // Inicializar como un array vacío para evitar errores
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
