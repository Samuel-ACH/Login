<?php
// Código para generar las tarjetas dinámicamente
include('../../../Controladores/Conexion/Conexion_be.php');

// Obtener el valor del tratamiento seleccionado
$idTratamiento = $_GET['tratamiento'];

// Consulta SQL para obtener los datos de las tarjetas asociadas al tratamiento seleccionado
$sql = "SELECT
    TT.Nombre AS TRATAMIENTO,
    TTER.idTipoTerapia AS Id,
    TTER.Nombre AS TIPO_TERAPIA
 FROM
    tbl_tipo_tratamiento AS TT
 INNER JOIN tbl_tipo_terapia AS TTER
 ON
    TT.Id_Tipo_Tratamiento = TTER.Id_Tipo_Tratamiento
 WHERE
    TT.Id_Tipo_Tratamiento = $idTratamiento";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    // Almacenar todos los resultados en un arreglo
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $tratamiento = $rows[0]["TRATAMIENTO"];

    // Imprimir tarjeta con ID único
    echo '<div class="card" id="tarjeta_' . $idTratamiento . '">';
    echo '<div class="divEvaluacion">';
    echo '<label class="labelEvaluacion">' . $tratamiento . '</label>';
    echo '<span class="icono-x-circle" onclick="cerrarTarjeta(\'tarjeta_' . $idTratamiento . '\')"><i class="fas fa-times-circle"></i></span>';
    echo '</div>';

    // Iniciar la primera columna
    echo '<div class="columnas">';

    $contador = 0; // Inicializar contador para contar elementos en la columna actual

    // Iterar sobre los resultados y generar los inputs dentro de las columnas
    foreach ($rows as $row) {
        // Obtener datos de la tarjeta
        $id = $row["Id"];
        $id_tipo_terapia = $row["Id"]; // Guardar el ID del tipo de terapia
        $descripcion = $row["TIPO_TERAPIA"];
        // Agregar elemento a la columna actual
        echo '<div class="columna">';
        echo '<form method="POST">';
        echo '<div class="divDescripcionEvaluacion">';
        echo '<div class="form-group">';
        echo '<label for="' . $id . '">' . ucwords($descripcion) . ':</label>';
        echo '<input type="text" class="formulario__input" id="' . $id . '" name="valorinput[' . $id . ']">';
        echo '</div>';
        echo '</div>';
        echo '</form>';
        echo '</div>';

        $contador++; // Incrementar contador de elementos en la columna actual

        // Verificar si se deben iniciar o cambiar de columna
        if ($contador % 4 == 0) { // Cambiar de columna después de cada 4 elementos
            echo '</div><div class="columnas">'; // Cerrar columna actual e iniciar una nueva
        }
    }

    // Cerrar la última columna y la tarjeta después de agregar todos los inputs
    echo '</div>'; // Cerrar última columna
    echo '</div>'; // Cerrar tarjeta
} else {
    echo "No se encontraron resultados.";
}
// Cerrar la última columna y la tarjeta después de agregar todos los inputs
echo '</div>'; // Cerrar última columna
echo '</div>'; // Cerrar tarjeta

// Mostrar el botón de guardar fuera del bucle foreach
echo '<form method="POST" action="../C_Expediente/C_procesar_guardado.php">'; // El atributo "action" debe apuntar al script que procesará la inserción
echo '<button type="submit" name="guardar" value="true">Guardar todo</button>';
echo '</form>';

$conexion->close();


// // Preparar la consulta SQL
// $sql = "INSERT INTO tbl_detalle_terapia_tratamiento (Id_Detalle_Terapia, Id_Tipo_Terapia, Resultado) VALUES (1, ?, ?)";
// $stmt = $conexion->prepare($sql);

// // Vincular los parámetros
// $stmt->bind_param("is", $id, $id);

// // Ejecutar la consulta
// $stmt->execute();

// // Verificar si la consulta se ejecutó correctamente
// if ($stmt->affected_rows > 0) {
//   echo "Los datos se insertaron correctamente.";
// } else {
//   echo "Error al insertar los datos.";
// }

// // Cerrar la conexión a la base de datos
// $stmt->close();
// $conexion->close();

// insercion de datos
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Preparar la consulta de inserción
//     $sql_insert = "INSERT INTO tbl_detalle_terapia_tratamiento (Id_Detalle_Terapia, Id_Tipo_Terapia, Resultado) VALUES (1, ?, ?)";
//     $stmt = $conexion->prepare($sql_insert);

//     // Iterar sobre los datos del formulario
//     foreach ($_POST as $key => $value) {
//         // Verificar si el nombre del campo corresponde a un ID de resultado de evaluación
//         if (is_numeric($key)) {
//             // Validar que el campo no esté vacío y tenga menos de 20 caracteres
//             if (!empty($value) && strlen($value) <= 20) {
//                 // Insertar los datos en la tabla tbl_detalle_terapia_tratamiento
//                 $id_tipo_terapia = $key;
//                 $resultado = $value;
//                 // Obtener la descripción del tipo de terapia
//                 $descripcion = obtenerDescripcionTipoTerapia($conexion, $id_tipo_terapia); 

//                 // Asignar el resultado de la función a $descripcionResultado
//                 $descripcionResultado = $descripcion;

//                 // Preparar la inserción con los datos obtenidos
//                 $stmt->bind_param("is", $id_tipo_terapia, $resultado);

//                 // Ejecutar la inserción y mostrar el mensaje correspondiente
//                 if ($stmt->execute()) {
//                     echo '<h6 class="alert alert-success">' . "Expediente Agregado con Éxito" . '</h6>';
//                 } else {
//                     echo '<h6 class="alert alert-danger">' . "Error al agregar el expediente" . '</h6>';
//                 }
//             }
//         }
//     }

//     // Cerrar el statement
//     $stmt->close();

//     // Formulario para el botón de guardar
//     echo '<form method="POST">';
//     echo '<hr>';
//     echo '<button type="submit">Guardar Todo</button>';
//     echo '</form>';
// }
