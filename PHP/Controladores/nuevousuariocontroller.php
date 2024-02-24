<?php
include 'Conexion_be.php';
include('../../Recursos/SweetAlerts.php');
//crear conexion

// Recibir datos del formulario
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$fechanacimiento = date("Y-m-d", strtotime($_POST['fecha_nacimiento']));
$fechacontratacion = date("Y-m-d", strtotime($_POST['fecha_contratacion']));
$estadousuario = $_POST['estado'];
$contrasena = $_POST['contrasena'];
$idrol = $_POST['Rol'];
$idgenero = $_POST['genero'];
$fechaultimaconexion = date("Y-m-d", strtotime($_POST['ultima_conexion']));
$primeriniciosesion = date("Y-m-d", strtotime($_POST['primera_conexion']));
$fechavencimiento = date("Y-m-d", strtotime($_POST['fecha_vencimiento']));
$creadopor = $_POST['creado_por'];
$numeroiniciosesion = $_POST['N_inicios_sesión'];

// Validar que los campos no estén vacíos
// if (!empty($dni) && !empty($usuario) && !empty($nombre) && !empty($correo) && !empty($direccion) 
//     && !empty($fechanacimiento) && !empty($fechacontratacion) && !empty($estadousuario) 
//     && !empty($contrasena) && !empty($idrol) && !empty($idgenero) && !empty($fechaultimaconexion)
//     && !empty($primeriniciosesion) && !empty($fechavencimiento) && !empty($fechacreacion) && !empty($creadopor)
//     && !empty($numeroiniciosesion)) {

//     // Validar que el DNI no contenga letras
//     if (!preg_match('/[A-Za-z]/', $dni)) {

//         // Validar que el nombre no contenga números ni caracteres especiales
//         if (!preg_match('/[0-9]/', $nombre) && !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $nombre)) {

//             // Validar el formato del correo electrónico
//             if (filter_var($correo, FILTER_VALIDATE_EMAIL) && substr_count($correo, '@') == 1 && substr($correo, 0, 1) != '.') {

//                 // Verificar si el correo electrónico ya está registrado
//                 $consultar_Email = "SELECT * FROM tbl_ms_usuario WHERE Correo = '$correo'";
//                 $verificar_correo = mysqli_query($conn, $consultar_Email);
//                 if (mysqli_num_rows($verificar_correo) == 0) {

//                     // Verificar si el nombre de usuario ya está registrado
//                     $consultar_User = "SELECT * FROM tbl_ms_usuario WHERE Usuario = '$usuario'";
//                     $verificar_usuario = mysqli_query($conn, $consultar_User);
//                     if (mysqli_num_rows($verificar_usuario) == 0) {

//                         // Insertar nuevo usuario en la base de datos
//                         $query = "INSERT INTO tbl_ms_usuario (DNI, Usuario, Correo, Nombre, Direccion, FechaNacimiento, FechaContratacion, 
//                                     Estado_Usuario, Contrasena, IdRol, IdGenero, Fecha_Ultima_Conexion, Primer_Inicio_Sesion, 
//                                     Fecha_Vencimiento, Fecha_Creacion, Creado_Por, Numero_Inicio_Sesion) 
//                                     VALUES ('$dni', '$usuario', '$correo', '$nombre', '$direccion', '$fechanacimiento', 
//                                     '$fechacontratacion', '$estadousuario', '$contrasena', '$idrol', '$idgenero', 
//                                     '$fechaultimaconexion', '$primeriniciosesion','$fechavencimiento', '$fechacreacion', '$creadopor ' 
//                                     '$numeroiniciosesion')";
//                         $resultado_query = mysqli_query($conn, $query);

//                             // Ejecutar la consulta
//                               if ($conn->query($sql) === TRUE) {
//                                echo "Datos insertados correctamente";
//                                   } else {
//                                     echo "Error: " . $sql . "<br>" . $conn->error;
//                                         }

//                         if ($resultado_query) {
//                             echo '
//                                 <script>
//                                     alert("Usuario almacenado correctamente.")
//                                     window.location = "../Vistas/Registro_Usuario_be.php";
//                                 </script>
//                             ';
//                             exit();
//                         } else {
//                             echo '
//                                 <script>
//                                     alert("Inténtalo de nuevo, usuario no almacenado.")
//                                     window.location = "../Vistas/Registro_Usuario_be.php";
//                                 </script>
//                             ';
//                             exit();
//                         }
//                     } else {
//                         echo '
//                             <script>
//                                 alert("El nombre de usuario ya está registrado, intenta con un nuevo nombre de usuario.")
//                                 window.location = "../Vistas/Registro_Usuario_be.php";
//                             </script>
//                         ';
//                         exit();
//                     }
//                 } else {
//                     echo '
//                         <script>
//                             alert("Este correo electrónico ya está registrado, intenta con otro correo electrónico diferente.")
//                             window.location = "../Vistas/Registro_Usuario_be.php";
//                         </script>
//                     ';
//                     exit();
//                 }
//             } else {
//                 echo '
//                     <script>
//                         alert("El correo electrónico no es válido.")
//                         window.location = "../Vistas/Registro_Usuario_be.php";
//                     </script>
//                 ';
//                 exit();
//             }
//         } else {
//             echo '
//                 <script>
//                     alert("No se permiten números o caracteres especiales en el campo Nombre.")
//                     window.location = "../Vistas/Registro_Usuario_be.php";
//                 </script>
//             ';
//             exit();
//         }
//     } else {
//         echo '
//             <script>
//                 alert("No se permiten letras en el campo DNI.")
//                 window.location = "../Vistas/Registro_Usuario_be.php";
//             </script>
//         ';
//         exit();
//     }
// } 

                // Verificar si el correo electrónico ya está registrado
                // $consultar_Email = "SELECT * FROM tbl_ms_usuario WHERE Correo = '$correo'";
                // $verificar_correo = mysqli_query($conn, $consultar_Email);
                // if (mysqli_num_rows($verificar_correo) == 0) {

                //     // Verificar si el nombre de usuario ya está registrado
                //     $consultar_User = "SELECT * FROM tbl_ms_usuario WHERE Usuario = '$usuario'";
                //     $verificar_usuario = mysqli_query($conn, $consultar_User);
                //     if (mysqli_num_rows($verificar_usuario) == 0) {

                       //Insertar nuevo usuario en la base de datos
                        $query = "INSERT INTO tbl_ms_usuario (DNI, Usuario, Correo, Nombre, Direccion, FechaNacimiento, FechaContratacion, 
                                    Estado_Usuario, Contrasena, IdRol, IdGenero, Fecha_Ultima_Conexion, Primer_Inicio_Sesion, 
                                    Fecha_Vencimiento, Creado_Por, Fecha_Creacion, Numero_Inicio_Sesion) 
                                    VALUES ('$dni', '$usuario', '$correo', '$nombre', '$direccion', '$fechanacimiento', 
                                    '$fechacontratacion', '$estadousuario', '$contrasena', '$idrol', '$idgenero', 
                                    '$fechaultimaconexion', '$primeriniciosesion','$fechavencimiento', '$creadopor', NOW(),
                                    '$numeroiniciosesion')";

// $query = "INSERT INTO tbl_ms_usuario (DNI, Usuario, Correo, Nombre, Direccion, FechaNacimiento, FechaContratacion, 
// Estado_Usuario, Contrasena, IdRol, IdGenero, Fecha_Ultima_Conexion, Primer_Inicio_Sesion, 
// Fecha_Vencimiento, Creado_Por, Fecha_Creacion, Numero_Inicio_Sesion) 
// VALUES ('$dni', '$usuario', '$correo', '$nombre', '$direccion', 'NOW(), 
// NOW(), '$estadousuario', '$contrasena', '$idrol', '$idgenero', 
// NOW(), '$primeriniciosesion', NOW(), '$creadopor', NOW(),
// '$numeroiniciosesion')";

$resultado_query = mysqli_query($conexion, $query);
if ($resultado_query) { // Validar que se insertó correctamente el registro
    echo '
        <script>
            MostrarAlerta("success", "¡GENIAL!", "Usuario almacenado correctamente.", "../Vistas/Index.php");
        </script>
    ';
} else {
    echo '
        <script>
            MostrarAlerta("error", "ERROR", "Inténtalo de nuevo, usuario no almacenado.", "../Vistas/Index.php");
        </script>
    ';
    exit();
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
