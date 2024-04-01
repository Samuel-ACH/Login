// Variable para almacenar los IDs de las tarjetas mostradas
var tarjetasMostradas = [];

document.getElementById("tratamiento").addEventListener("change", function() {
    var selectedValue = this.value;

    if (selectedValue !== "0") {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var tarjetasHTML = this.responseText;

                // Verificar si el tratamiento ya ha sido mostrado
                if (tarjetasMostradas.includes(selectedValue)) {
                    // Si el tratamiento ya ha sido mostrado, verificar si su tarjeta está oculta
                    var tarjetaId = "tarjeta_" + selectedValue;
                    var tarjeta = document.getElementById(tarjetaId);
                    if (tarjeta && tarjeta.style.display === 'none') {
                        mostrarTarjeta(tarjetaId); // Mostrar la tarjeta oculta
                    }
                } else {
                    // Determinar en qué columna agregar las tarjetas alternadamente
                    var columnaActual = document.getElementById("contenedor-tarjetas-columna1");
                    var tarjetasColumna1 = document.querySelectorAll("#contenedor-tarjetas-columna1 .card").length;
                    var tarjetasColumna2 = document.querySelectorAll("#contenedor-tarjetas-columna2 .card").length;

                    if (tarjetasColumna2 < tarjetasColumna1) {
                        columnaActual = document.getElementById("contenedor-tarjetas-columna2");
                    }

                    // Agregar el contenido de las nuevas tarjetas a la columna determinada
                    columnaActual.innerHTML += tarjetasHTML;

                    // Agregar el ID del tratamiento mostrado al registro
                    tarjetasMostradas.push(selectedValue);
                }
            }
        };

        xhttp.open("POST", "../V_Expediente/V_tarjetas_expediente_terapeutico.php?tratamiento=" + selectedValue, true);
        xhttp.send();
    }
});
