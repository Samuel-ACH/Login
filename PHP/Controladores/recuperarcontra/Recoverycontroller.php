<?php
session_start(); // Iniciar sesión si no está iniciada
include('../Conexion_be.php');
include('../../../Recursos/SweetAlerts.php');
include('../recuperarcontra/EnviarOTPcontra.php');

// Asegúrate de asignar primero el valor de $correo2
$correo2 = isset($_POST['correo3']) ? $_POST['correo3'] : '';
$_SESSION['correo3'] = $correo2;
if (!empty($correo2)) {
    if (substr_count($correo2, '@') == 1) { // Validar que el correo no tenga 2 '@' o ','

        if (substr($correo2, -1) != '.') { // Validar que el correo no finalice con un '.'

            $consultar_Email = "SELECT * FROM tbl_ms_usuario WHERE Correo = '$correo2'";
            $verificar_correo2 = mysqli_query($conexion, $consultar_Email);

            if (mysqli_num_rows($verificar_correo2) > 0) { // Validar que el correo electrónico existe en la BD
                 enviarOTP2($conexion, $correo2);
            } else {
                echo '
                                <script>
                                    MostrarAlerta("error", "ERROR", "Este correo electrónico no está registrado.", "../Vistas/Recuperar/V_Correorecovery.php");
                                </script>
                            ';
                exit();
            }
        } else {
            echo '
                            <script>
                                MostrarAlerta("error", "ERROR", "El correo electrónico no es válido, porque finaliza con un punto.", "../Vistas/Recuperar/V_Correorecovery.php");
                            </script>
                        ';
            exit();
        }
    } else {
        // Agrega manejo para el caso de que el correo tenga 2 '@' o no tenga '@'.
        echo '
                        <script>
                            MostrarAlerta("error", "ERROR", "El correo electrónico no es válido.", "../Vistas/Recuperar/V_Correorecovery.php");
                        </script>
                    ';
        exit();
    }
}
?>

<!-- ?php
session_start(); // Iniciar sesión si no está iniciada
include ('../Conexion_be.php');
include('../../../Recursos/SweetAlerts.php');
include('../recuperarcontra/EnviarOTPcontra.php');

if (!empty($correo2)) {
    $correo2 = $_POST['correo3'];
    if (substr_count($correo2, '@') == 1) { // Validar que el correo no tenga 2 '@' o ','

        if (substr($correo2, -1) != '.') { // Validar que el correo no finalice con un '.'

            $consultar_Email = "SELECT * FROM tbl_ms_usuario WHERE Correo = '$correo2'";
            $verificar_correo2 = mysqli_query($conexion, $consultar_Email);

            if (mysqli_num_rows($verificar_correo2) > 0) { // Validar que el correo electrónico existe en la BD
                 enviarOTP2($conexion, $correo2);
            } else {
                echo '
                                <script>
                                    MostrarAlerta("error", "ERROR", "Este correo electrónico no está registrado.", "../Vistas/Recuperar/V_Correorecovery.php");
                                </script>
                            ';
                exit();
            }
        } else {
            echo '
                            <script>
                                MostrarAlerta("error", "ERROR", "El correo electrónico no es válido, porque finaliza con un punto.", "../Vistas/Recuperar/V_Correorecovery.php");
                            </script>
                        ';
            exit();
        }
    }
}
?> -->
<!-- 
session_start();
include('../Conexion_be.php');
//include('../../../Recursos/SweetAlerts.php');
require_once('EnviarOTPcontra.php');
$correo = $_POST['correo'];

if (!empty($correo)) { // Validar que el correo y contraseña no estén vacíos.
    $consultar_Login = "SELECT * FROM tbl_ms_usuario WHERE Correo='$correo'";
    $verificar_login = mysqli_query($conexion, $consultar_Login); // Validar que existe una conexión a la BD y se realiza una consulta

    if (mysqli_num_rows($verificar_login) > 0) { // Validar que existe el registro en la base de datos para iniciar sesión
        $_SESSION['correo'] = $correo;  // Almacena el usuario/correo que inició sesión en el sistema.
       //comentar la linea de abajo y descomentar el header de Main para desactivar el OTP
       enviarOTP($conexion, $correo);
        //  header("location: ../Vistas/Main.php"); // Redirecciona al usuario a la página principal
        //  exit();
    } else {
        echo '
            <script>
                MostrarAlerta("error", "ERROR", "No existe cuenta con ese correo electronico.", "../../Vistas/Index.php");
            </script>
        ';
        exit();
    }
} else {
    echo '
        <script>
            MostrarAlerta("error", "ERROR", "Los campos están vacíos.", "../../Vistas/Index.php");
        </script>
    ';
    exit();
}
 -->
<!-- 
session_start();
include('../conexiondb.php');
// La línea de SweetAlerts está comentada. Se recomienda gestionar los mensajes de error de otra manera.
// include('../../../Recursos/SweetAlerts.php');
include('../recuperarcontra/EnviarOTPcontra.php');

// Verifica si el correo está establecido y no es vacío
if (isset($_POST['correo']) && !empty(trim($_POST['correo']))) {
    $correo = trim($_POST['correo']);

    // Preparar la consulta para evitar inyecciones SQL
    $consultar_Login = $conexion->prepare("SELECT * FROM tbl_ms_usuario WHERE Correo = ?");
    $consultar_Login->bind_param("s", $correo);
    $consultar_Login->execute();
    $resultado = $consultar_Login->get_result();

    if ($resultado->num_rows > 0) {
        // Si el correo existe, proceder a enviar el OTP
        $_SESSION['correo'] = $correo;
        
        // Enviar OTP
        enviarOTP($conexion, $correo);
        
        // Redirigir al usuario a confirmar el OTP (asegúrate de que esta página exista y esté configurada correctamente)
         header("Location: ../../Vistas/Recuperarcontra.php");
       
    } else {
        // Si no existe el correo, redirigir con un mensaje de error
        header("Location: ../../Vistas/Index.php?error=no_existe");
        exit();
    }
} else {
    // Si el campo correo está vacío, redirigir con un mensaje de error
    header("Location: ../../Vistas/Index.php?error=vacio");
    exit();
}
?> -->
