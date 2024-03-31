<?php
function ExpedienteClinico(){
    include('../../../Controladores/Conexion/Conexion_be.php');

    function mostrarFormulario($id_evaluacion) {
        global $conexion;
    
        // Consulta para obtener los datos de la evaluación
        $sql = "SELECT E.Descripcion AS EvaluacionDescripcion, RE.Descripcion, RE.Id_Resultado_Evaluacion 
                FROM tbl_evaluacion AS E
                INNER JOIN tbl_resultado_evaluacion AS RE ON E.Id_Evaluacion = RE.Id_Evaluacion
                WHERE E.Id_Evaluacion = $id_evaluacion";
        $result = $conexion->query($sql);
    
        if ($result->num_rows > 0) {
            // Almacenar todos los resultados en un arreglo
            $rows = $result->fetch_all(MYSQLI_ASSOC);
    
            // Obtener la descripción de la evaluación
            $evaluacionDescripcion = $rows[0]["EvaluacionDescripcion"];
    
            // Mostrar los datos en labels y generar inputs
            echo '<div class="card">';
            echo '<div class="divEvaluacion">';
            echo '<label class="labelEvaluacion">' . $evaluacionDescripcion . '</label>';
            echo '</div>';
            echo '<div class="divDescripcionEvaluacion">';
            echo '<div class="columnas">';
            foreach ($rows as $row) {
                $descripcion = $row["Descripcion"];
                $id_resultado = $row["Id_Resultado_Evaluacion"];
                echo '<div class="form-group">';
                echo '<label for="' . $id_resultado . '">' . ucwords($descripcion) . ':</label>';
                echo '<input type="text" class="formulario__input" name="' . $id_resultado . '" maxlength="20">';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>'; // Cerrar el div con la clase "card"
        } else {
            echo "No se encontraron resultados.";
        }
    }
    
    // Iniciar el formulario global
    echo '<form method="POST">';
    
    // Mostrar el formulario para el historial clínico
    mostrarFormulario(1);
    
    // Mostrar el formulario para el examen físico
    mostrarFormulario(2);
    
    // Mostrar el formulario para el diagnóstico
    mostrarFormulario(3);
    
    // Agregar el botón de envío global
    echo '<button type="submit">Guardar Todo</button>';
    
    echo '</form>'; // Cerrar el formulario global
    
    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Preparar la consulta de inserción
        $sql_insert = "INSERT INTO tbl_resultado_expediente (Id_Resultado_Evaluacion, Id_Detalle_Expediente, Resultado) VALUES (?, 1, ?)";
        $stmt = $conexion->prepare($sql_insert);
        
        // Iterar sobre los datos del formulario
        foreach ($_POST as $key => $value) {
            // Verificar si el nombre del campo corresponde a un ID de resultado de evaluación
            if (is_numeric($key)) {
                // Validar que el campo no esté vacío y tenga menos de 20 caracteres
                if (!empty($value) && strlen($value) <= 20) {
                    // Insertar los datos en la tabla tbl_resultado_expediente
                    $id_resultado_evaluacion = $key;
                    $resultado = $value;
    
                    $stmt->bind_param("is", $id_resultado_evaluacion, $resultado);
                    if ($stmt->execute()) {
                        echo "<p>Los datos se han insertado correctamente para la evaluación con ID: $id_resultado_evaluacion.</p>";
                    } else {
                        echo "<p>Error al insertar datos para la evaluación con ID: $id_resultado_evaluacion.</p>";
                    }
                }
            }
        }
        $stmt->close();
    }
    
    $conexion->close();
}
?>