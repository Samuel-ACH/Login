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
        // Verificar si el input no tiene el atributo 'readonly'
        if (!tarjeta.hasAttribute('readonly') && valor !== '') { // Verificar si el campo tiene datos y no es de solo lectura
            datosTarjetas[id] = valor; // Agregar los datos al objeto
        }
    });

    // Verificar si hay datos para enviar al servidor
    if (Object.keys(datosTarjetas).length === 0) {
        // Si no hay datos para guardar, mostrar alerta de SweetAlert2
        Swal.fire({
            title: 'Atención',
            text: 'No hay datos para guardar.',
            icon: 'warning', // Ícono de advertencia
            confirmButtonText: 'Aceptar' // Texto del botón de confirmación
        });
    } else {
        // Si hay datos para guardar, mostrar alerta de confirmación de SweetAlert2
        Swal.fire({
            title: 'Confirmación',
            text: '¿Estás seguro que deseas guardar los datos?',
            icon: 'question', // Ícono de pregunta
            showCancelButton: true, // Mostrar botón de cancelación
            confirmButtonText: 'Guardar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, enviar los datos al servidor
                var datosJSON = JSON.stringify(datosTarjetas);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '../C_Expediente/C_procesar_tarjeta.php', true);
                xhr.setRequestHeader('Content-Type', 'application/json'); // Especificar el tipo de contenido como JSON
                xhr.onload = function() {
                    // Manejar la respuesta del servidor aquí si es necesario
                    console.log(xhr.responseText);
                    
                    // Mostrar alerta de éxito después de guardar los datos
                    Swal.fire({
                        title: 'Éxito',
                        text: 'Los datos se han guardado correctamente.',
                        icon: 'success',
                        timer: 2000, // Cerrar automáticamente después de 2 segundos
                        showConfirmButton: false // Ocultar botón de confirmación
                    }).then(() => {
                        // Redirigir al usuario a una nueva página después de guardar los datos
                        window.location.href = '/PHP/Vistas/Main.php';
                    });
                };
                xhr.send(datosJSON);
            }
        });
    }
}

// Seleccionar el botón de guardar por su ID
var botonGuardar = document.getElementById('guardarDatos');

// Agregar el evento 'click' al botón de guardar
botonGuardar.addEventListener('click', function(event) {
    // Prevenir el comportamiento predeterminado del formulario (si el botón está dentro de un formulario)
    event.preventDefault();
    
    // Llamar a la función 'guardarDatos' cuando se haga clic en el botón
    guardarDatos();
});


  