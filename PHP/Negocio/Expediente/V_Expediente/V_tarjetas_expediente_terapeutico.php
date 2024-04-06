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
    $descripcion = $row["TIPO_TERAPIA"];

    // Agregar elemento a la columna actual
    echo '<div class="columna">';
    echo '<form method="POST" onsubmit="enviarDatos(event, ' . $id . ')">'; // Agregar evento onsubmit para enviar datos
    echo '<div class="divDescripcionEvaluacion">';
    echo '<div class="form-group">';
    echo '<label for="' . $id . '">' . ucwords($descripcion) . ':</label>';
    echo '<input type="text" class="formulario__input" id="' . $id . '" name="' . $id . '">';
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
echo '<button type="button" id="guardarDatos" onclick="guardarDatos()">Guardar Datos</button>';
$conexion->close();
?>


<script>
function enviarDatos(event, id) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario (recargar la página)

    // Obtener el valor del campo de entrada
    var descripcion = document.getElementById(id).value;

    // Crear un objeto con los datos a enviar
    var datos = {
        id: id,
        descripcion: descripcion
    };

    // Convertir el objeto a formato JSON
    var datosJSON = JSON.stringify(datos);

    // Enviar los datos al servidor utilizando AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../C_Expediente/C_procesar_tarjeta.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json'); // Especificar el tipo de contenido como JSON
    xhr.onload = function () {
        // Manejar la respuesta del servidor aquí si es necesario
        console.log(xhr.responseText);
    };
    xhr.send(datosJSON);
}

</script>
