import * as funciones from '../../../javascript/validacionGeneral';

const formulario_Parametros = document.getElementById('modalNuevoParametro');
const inputs = document.querySelectorAll('#modalNuevoParametro input');

const validarModalAgregar = (e) => {
// let estadoValidado = true;
  switch (e.target.name) {
    case "parametro":
      validarInputParametro(e, 'parametro');
      break;

    case "valorParametro":
      validarInput_ValorParametro(e, 'valorParametro');
      break;
  }
}

inputs.forEach((input) => {
  input.addEventListener('keyup', validarModalAgregar); // Verificar el campo después de presionar una tecla
  input.addEventListener('blur', validarModalAgregar); // Comprobar cuando da clic fuera del campo
});

let validarInputParametro = (e, campo) => { 
    let estadoValidacion = {
      estadoCV: false,
    //   estadoER: false,
    };
    estadoValidacion.estadoCV = funciones.validarCampoVacio(e.target, `${campo}`, 'Por favor, ingresa un parámetro.');
  
    // estadoValidacion.estadoCV 
    //   ? (estadoValidacion.estadoER = funciones.validarExpresionRegular(expresiones.correo, e.target, `${campo}`, 'El correo no coincide con el formato establecido')) : "";
    
    return estadoValidacion;
  };

let validarInput_ValorParametro = (e, campo) => { 
    let estadoValidacion = {
      estadoCV: false,
    //   estadoER: false,
    };
    estadoValidacion.estadoCV = funciones.validarCampoVacio(e.target, `${campo}`, 'Por favor, ingresa el valor del parámetro.');
  
    // estadoValidacion.estadoCV 
    //   ? (estadoValidacion.estadoER = funciones.validarExpresionRegular(expresiones.correo, e.target, `${campo}`, 'El correo no coincide con el formato establecido')) : "";
    
    return estadoValidacion;
  };
  
  formulario_Parametros.addEventListener('submit', function (e) {
    const error_Formulario_Parametros = document.querySelectorAll(".formulario__grupo-incorrecto");
    const error_Formulario = document.querySelectorAll(".formulario__input-error-activo");

    // Comprueba si hay errores de validación
    if (error_Formulario_Parametros.length > 0 || error_Formulario.length > 0) {
        e.preventDefault();
        // funciones.MostrarAlerta('', '¡ERROR!', 'Hay errores en el formulario. Por favor, corrígelos antes de enviarlo.');
        // funciones.MostrarAlerta('error', '¡ERROR!', 'Hay errores en el formulario. Por favor, corrígelos antes de enviarlo.');
        alertify.error("Por favor, corrige los errores antes de enviar el formulario.");
    } else {
        // Si no hay errores, permite el envío del formulario
        // Si llegas a este punto, el formulario se enviará
    }
});
