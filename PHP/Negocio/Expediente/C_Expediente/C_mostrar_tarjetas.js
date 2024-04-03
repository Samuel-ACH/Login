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