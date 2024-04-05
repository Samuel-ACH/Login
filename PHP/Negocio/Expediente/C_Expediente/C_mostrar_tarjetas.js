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


const btnGuardarResultados = document.getElementById('btnGuardarResultados');

btnGuardarResultados.addEventListener('click', () => {
  // Obtener los valores de todos los campos "Resultado"
  const resultados = document.querySelectorAll('.formulario__input');
  const datos = {};

  for (const resultado of resultados) {
    const id = resultado.getAttribute('id');
    const valor = resultado.value;

    // Utilizamos el ID como clave y el valor como valor en el objeto datos
    datos[id] = valor;
  }

  // Enviar los datos al servidor
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "./C_procesar_guardado.php");
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.send(JSON.stringify(datos));

  // Mostrar un mensaje de éxito o error
  xhr.onload = () => {
    if (xhr.status === 200) {
      console.log('Los datos se guardaron correctamente.');
    } else {
      console.log('Error al guardar los datos.');
    }
  };
});
