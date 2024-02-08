<!-- 

// Acceso de conexion a la base de datos
include 'Conexion_be.php';

// capturar los valores de formulario de registro
$tipodni = $_POST['tipodni'];
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$fechanacimiento = $_POST['fechanacimiento'];
$genero = $_POST['genero'];
// Encriptar contraseña
$clave = $_POST['clave'];
//$encrypt_password = hash('sha512',$clave);


// Query para insertar los datos en la tabla de la base de datos
$query1 = "INSERT INTO tbl_tipo_Documento(Descripcion) VALUES ('$tipodni')";
$query2 = "INSERT INTO tbl_ms_usuario(DNI, Usuario, Correo, Nombre, Direccion, FechaNacimiento, Contrasena) 
                             VALUES ('$dni', '$usuario', '$correo', '$nombre', '$direccion', '$fechanacimiento', '$clave')";
$query3 = "INSERT INTO tbl_genero(Descripcion) VALUES ('$genero')";


// Consulta a la BD para verificar la existencia de un correo o usuario
$consultar_Email = "SELECT * FROM tbl_ms_usuario WHERE Correo = '$correo' ";
$consultar_User = "SELECT * FROM tbl_ms_usuario WHERE Usuario = '$usuario' ";

// Validar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, $consultar_Email);
if(mysqli_num_rows($verificar_correo) > 0){
    echo'
            <script>
                alert("Este correo electrónico ya está registrado, intenta con otro correo electrónico diferente.")
                window.location = "../Vistas/Login.php";
                </script>
        ';
        exit();
}

// Validar que el correo no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, $consultar_User);
if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
            <script>
                alert("El nombre de usuario ya está registrado, intenta con un nuevo nombre de usuario.")
                window.location = "../Vistas/Login.php";
                </script>
        ';
        exit();
}

// Variable para ejecutar el query de insertar registro
$ejecutar = mysqli_query($conexion, $query1, $query2, $query3);

if($ejecutar){
    echo'
            <script>
                alert("Usuario almacenado correctamente.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}else{
    echo'
            <script>
                alert("Intentalo de nuevo, usuario no almacenado.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}

// Cerrar conexión
mysqli_close($conexion);
 -->
 <?php
include 'Conexion_be.php';

$tipodni = $_POST['tipodni'];
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$fechanacimiento = $_POST['fechanacimiento'];
$genero = $_POST['genero'];
$clave = $_POST['clave'];

$clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);

$query1 = "INSERT INTO tbl_tipo_Documento(Descripcion) VALUES ('$tipodni')";
$query2 = "INSERT INTO tbl_ms_usuario(DNI, Usuario, Correo, Nombre, Direccion, FechaNacimiento, Contrasena) 
                             VALUES ('$dni', '$usuario', '$correo', '$nombre', '$direccion', '$fechanacimiento', '$clave_encriptada')";
$query3 = "INSERT INTO tbl_genero(Descripcion) VALUES ('$genero')";

$consultar_Email = "SELECT * FROM tbl_ms_usuario WHERE Correo = '$correo'";
$consultar_User = "SELECT * FROM tbl_ms_usuario WHERE Usuario = '$usuario'";

$verificar_correo = mysqli_query($conexion, $consultar_Email);
if(mysqli_num_rows($verificar_correo) > 0){
    echo'
            <script>
                alert("Este correo electrónico ya está registrado, intenta con otro correo electrónico diferente.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
        exit();
}

$verificar_usuario = mysqli_query($conexion, $consultar_User);
if(mysqli_num_rows($verificar_usuario) > 0){
    echo'
            <script>
                alert("El nombre de usuario ya está registrado, intenta con un nuevo nombre de usuario.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
        exit();
}

// Aquí deberías ejecutar las consultas de inserción después de que las verificaciones sean exitosas
$resultado_query1 = mysqli_query($conexion, $query1);
$resultado_query2 = mysqli_query($conexion, $query2);
$resultado_query3 = mysqli_query($conexion, $query3);

// Comprueba si todas las consultas de inserción fueron exitosas
if($resultado_query1 && $resultado_query2 && $resultado_query3){
    echo'
            <script>
                alert("Usuario almacenado correctamente.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}else{
    echo'
            <script>
                alert("Inténtalo de nuevo, usuario no almacenado.")
                window.location = "../Vistas/Login.php";
            </script>
        ';
}

mysqli_close($conexion);
?>
