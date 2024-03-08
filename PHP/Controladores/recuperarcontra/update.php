 <!--php
require_once("../Conexion_be.php");
require_once("./Recoverycontroller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Verificar si las contraseñas coinciden
        
        // Obtener la nueva contraseña
        $nueva_contrasena = md5($_POST['password3']);
        
        // Obtener el correo del usuario de la sesión
        $correo_usuario = $_SESSION['correo3']; // Asegúrate de establecer este valor cuando el usuario inicie sesión
        
        // Realizar la actualización de la contraseña en la base de datos
        // Aquí debes tener tu conexión a la base de datos y realizar la consulta SQL para actualizar la contraseña
        // Reemplaza 'tu_tabla' por el nombre real de tu tabla de usuarios y 'campo_correo' por el nombre real del campo que contiene los correos electrónicos en tu tabla
        $consulta = "UPDATE tbl_ms_usuario SET Contrasena = '$nueva_contrasena' WHERE Correo = '$correo_usuario'";
        
        // Ejecutar la consulta
        $resultado = mysqli_query($conexion, $consulta); 
        
        // Verificar si la actualización fue exitosa
        if ($resultado) {
            // Redirigir al usuario a la página de inicio de sesión u otra página
            echo"Contraseña actualizada con exito";
            header("Location: ../../Vistas/Index.php");
            exit();
        } else {
            echo "Error al actualizar la contraseña. Por favor, inténtalo de nuevo.";
        }
    }
? -->
<?php
session_start();

// Incluir el archivo de conexión a la base de datos
include("../Conexion_be.php");
$password2 = $_POST['password2'];
$password3 = $_POST['password3'];
$correo = $_POST['correo3'];
// Verificar si se ha enviado el formulario y si las contraseñas coinciden
if(isset($_POST['password2']) && isset($_POST['password3']) && isset($_POST['correo3'])) {

    echo "Etapa1";
    // Verificar que las contraseñas coinciden
    if($password2 != $password3) {
        echo "Etapa2";
        // Contraseñas no coinciden, mostrar mensaje de error y redirigir de vuelta al formulario
        $_SESSION['error'] = "Las contraseñas no coinciden.";
        echo "Etapa3";
        header("Location: ../../Vistas/Recuperarcontra.php");
        echo "Etapa4";
        exit();
        
    }else{
         // Encriptar la nueva contraseña (asumiendo que estás usando una función de hash)
    $hashed_password = md5($password2);

    // Actualizar la contraseña en la base de datos
    $sql = "SELECT Contrasena FROM tbl_ms_usuario WHERE Correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    echo "Etapa9";
    // Redirigir a alguna página de éxito
    header("Location: ../../Vistas/Index.php?success=contrasena_actualizada");

   
    exit();
    }

   
} else {
    echo "Etapa10";
    // Si no se enviaron los datos esperados, redirigir de vuelta al formulario
   echo "Error al procesar la solicitud.";
   
   // header("Location: ../../Vistas/Recuperarcontra.php");
    exit();
}
?>
