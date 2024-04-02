

// // $(document).ready(function () {
// //   // Evento focusout del campo de correo electrónico
// //   $('#correo').on('focusout', function () {
// //     // Obtener el valor del campo de correo electrónico
// //     var correo = $('#correo').val();

// //     // Llamada a la función para verificar el inicio de sesión y mostrar/ocultar el captcha
// //     $.ajax({
// //       url: '../Consultas/ConsultaCaptcha.php',
// //       type: 'POST',
// //       dataType: 'text', // Cambiado a 'text' en lugar de 'json'
// //       data: { correo: correo },
// //       success: function (response) {
// //         console.log('Respuesta del servidor:', response);

// //         // Convertir el valor a un número
// //         var inicioSesion = parseInt(response);

// //         if (!isNaN(inicioSesion)) {
// //           if (inicioSesion === 1) {
// //             // Si el inicio de sesión es 1, ocultar el captcha
// //             ocultarCaptcha();
// //           } else {
// //             // Si el inicio de sesión es 0, mostrar el captcha
// //             mostrarCaptcha();
// //           }
// //         } else {
// //           console.error('La respuesta del servidor no es un número válido.');
// //         }
// //       },
// //       error: function (xhr, textStatus, errorThrown) {
// //         console.error('Error al obtener el estado del inicio de sesión:', textStatus, errorThrown);
// //         // Manejar el error según sea necesario
// //       }
// //     });
// //   });

// //   // Función para mostrar el captcha
// //   function mostrarCaptcha() {
// //     console.log('Mostrar captcha');
// //     $('#captcha').show();
// //   }

// //   // Función para ocultar el captcha
// //   function ocultarCaptcha() {
// //     console.log('Ocultar captcha');
// //     $('#captcha').hide();
// //   }
// // });

// document.addEventListener("DOMContentLoaded", function () {
//   // Obtener referencia al campo de correo y al contenedor del captcha
//   var InputCorreo = document.getElementById("correo");
//   var contenedorCaptcha = document.getElementById("captcha");

//   // Agregar un evento al campo de correo para activar el captcha
//   InputCorreo.addEventListener("blur", function () {
//     // Verificar si el campo de correo está lleno
//     if (InputCorreo.value.trim() !== "") {
//       // Mostrar el captcha
//       contenedorCaptcha.style.display = "block";
//     } else {
  //       // Ocultar el captcha si el campo de correo está vacío
//       contenedorCaptcha.style.display = "none";
//     }
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   // Obtener referencia al campo de correo, al contenedor del captcha y al formulario
//   var campoCorreo = document.getElementById("correo");
//   var contenedorCaptcha = document.getElementById("captcha");
//   var formulario = document.getElementById("loginForm"); // Asegúrate de tener un id en tu formulario

//   // Agregar un evento al formulario para manejar la activación del captcha
//   formulario.addEventListener("submit", function (event) {
//     event.preventDefault(); // Evitar que el formulario se envíe automáticamente

//     // Verificar si el campo de correo está lleno
//     if (campoCorreo.value.trim() !== "") {
//       // Realizar la consulta al servidor
//       $.ajax({
//         url: '../Controladores/ConsultaCaptcha.php', // Reemplaza con la ruta correcta de tu archivo PHP
//         type: 'POST',
//         data: { correo: campoCorreo.value },
//         success: function (respuesta) {
//           // Analizar la respuesta JSON del servidor
//           var respuestaJSON = JSON.parse(respuesta);

//           // Verificar el valor de primer_ingreso
//           if (respuestaJSON.primer_ingreso === 1) {
//             // El primer ingreso es 1, ocultar el captcha
//             contenedorCaptcha.style.display = "none";
//           } else {
//             // El primer ingreso no es 1, mostrar el captcha
//             contenedorCaptcha.style.display = "block";
//           }

//           // Continuar con el envío del formulario si es necesario
//           formulario.submit();
//         },
//         error: function () {
//           // Manejar errores de la consulta
//           console.error("Error en la consulta AJAX");
//         }
//       });
//     } else {
//       // El campo de correo está vacío, continuar con el envío del formulario
//       formulario.submit();
//     }
//   });
// });

document.addEventListener('DOMContentLoaded', function () {
  // var estadoValidacion = { PrimerIngreso : false };
  var correoInput = document.getElementById('correo');
  var contenedorCaptcha = document.getElementById("captcha");

  correoInput.addEventListener('blur', function () {
    var correo = this.value.trim();

    if (correo === "") {
      contenedorCaptcha.style.display = "none";
    } else {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '../Consultas/ConsultaCaptcha.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var response = xhr.responseText;
          
          if (response === "Ocultar") {
            // estadoValidacion.PrimerIngreso  = true;
            contenedorCaptcha.style.display = "none";
          } else {
            // estadoValidacion.PrimerIngreso  = false;
            contenedorCaptcha.style.display = "block";       
          }
        }
      };
      xhr.send('correo=' + correo);
    }
  });
});

