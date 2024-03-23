<?php
include '../../../Controladores/Conexion/Conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUsuario = $_POST['idUsuario'];
    $dni = $_POST["dni"];
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $estado = $_POST["estado"];
    $rol = $_POST["rol"];
    // $genero = $_POST["genero"];
    // $fechavencimiento = $_POST["fechavencimiento"];
    // $creadopor = $_POST["creadopor"];
    $fechanacimiento = $_POST["fechanacimiento"];
    $fechacontratacion = $_POST["fechacontratacion"];
    // $fechaultimaconexion = $_POST["ultimaconexion"];
    // $primeraconexion = $_POST["primeraconexion"];
    // $fechacreacion = $_POST["fechacreacion"];
    // $numeroiniciosesion = $_POST["numerosesiones"];
    // $idUsuario = $_POST["idUsuario"];
    $fechamodificacion = date('Y-m-d'); // Fecha de modificación

    // Actualizar los datos del usuario en la base de datos
    $actualizarUsuarioQuery = "UPDATE tbl_ms_usuario SET DNI = ?, Usuario = ?, Correo = ?, Nombre = ?, Estado_Usuario = ?, 
    IdRol = ?, FechaNacimiento = ?, FechaContratacion = ?, NOW() WHERE Id_Usuario = ?";
    $stmt = mysqli_prepare($conexion, $actualizarUsuarioQuery);
    mysqli_stmt_bind_param($stmt, "issssiisssssssii", $dni, $usuario, $correo, $nombre, $estado, $rol,
     $fechanacimiento, $fechacontratacion, $fechamodificacion, $idUsuario);

    if (mysqli_stmt_execute($stmt)) {
         // Mensaje de éxito
         $mensajeExito = "¡Los cambios se han guardado exitosamente!";

        // Redireccionar a la página principal o mostrar un mensaje de éxito
        header("Location: ../V_Usuario/V_usuario.php");
        exit();
    } else {
        echo "Error al guardar los cambios: " . mysqli_error($conexion);
    }

    mysqli_stmt_close($stmt);
}
?>
