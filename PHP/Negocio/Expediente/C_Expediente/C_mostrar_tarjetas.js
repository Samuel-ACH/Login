// Variable para almacenar los IDs de las tarjetas mostradas
var tarjetasMostradas = [];

// Definir una función para llamar a ExpedienteTerapeutico después de mostrar las tarjetas
function mostrarTarjetasYExpedienteTerapeutico(selectedValue) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var tarjetasHTML = this.responseText;

            // Verificar si el ID de la tarjeta ya ha sido mostrado
            if (!tarjetasMostradas.includes(selectedValue)) {
                // Determinar en qué columna agregar las tarjetas alternadamente
                var columnaActual = document.getElementById("contenedor-tarjetas-columna1");
                var tarjetasColumna1 = document.querySelectorAll("#contenedor-tarjetas-columna1 .card").length;
                var tarjetasColumna2 = document.querySelectorAll("#contenedor-tarjetas-columna2 .card").length;

                if (tarjetasColumna2 < tarjetasColumna1) {
                    columnaActual = document.getElementById("contenedor-tarjetas-columna2");
                }

                // Agregar el contenido de las nuevas tarjetas a la columna determinada
                columnaActual.innerHTML += tarjetasHTML;

                // Agregar el ID de la tarjeta mostrada al registro
                tarjetasMostradas.push(selectedValue);

                // Disparar un evento personalizado para indicar que las tarjetas se han mostrado
                var tarjetasMostradasEvent = new CustomEvent('tarjetasMostradas', { detail: selectedValue });
                document.dispatchEvent(tarjetasMostradasEvent);
            }
        }
    };

    xhttp.open("POST", "../V_Expediente/V_tarjetas_expediente_terapeutico.php?tratamiento=" + selectedValue, true);
    xhttp.send();
}

// Manejar el evento de cambio en el combobox de tratamientos
document.getElementById("tratamiento").addEventListener("change", function() {
    var selectedValue = this.value;

    if (selectedValue !== "0") {
        mostrarTarjetasYExpedienteTerapeutico(selectedValue);
    }
});

// Función para recopilar y enviar los datos al servidor
function guardarDatos() {
    var datosTarjetas = {}; // Objeto para almacenar los datos de las tarjetas

    // Recorrer todas las tarjetas y recopilar los datos
    var tarjetas = document.querySelectorAll('.formulario__input');
    tarjetas.forEach(function(tarjeta) {
        var id = tarjeta.id;
        var valor = tarjeta.value.trim(); // Obtener el valor del campo y eliminar espacios en blanco
        if (valor !== '') { // Verificar si el campo tiene datos
            datosTarjetas[id] = valor; // Agregar los datos al objeto
        }
    });

    // Verificar si hay datos para enviar al servidor
    if (Object.keys(datosTarjetas).length > 0) {
        // Convertir los datos a formato JSON
        var datosJSON = JSON.stringify(datosTarjetas);

        // Enviar los datos al servidor utilizando AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../C_Expediente/C_procesar_tarjeta.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json'); // Especificar el tipo de contenido como JSON
        xhr.onload = function () {
            // Manejar la respuesta del servidor aquí si es necesario
            console.log(xhr.responseText);
        };
        xhr.send(datosJSON);
    } else {
        // Si no hay datos, mostrar un mensaje de advertencia
        alert('No hay datos para guardar.');
    }
}
