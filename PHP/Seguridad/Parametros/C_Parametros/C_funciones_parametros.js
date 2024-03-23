function insertarParametro(parametro, valorParametro) {
    cadena = "parametro=" + parametro +
        "&valorParametro=" + valorParametro;
    $.ajax({
        type: 'POST',
        url: '../C_Parametros/C_guardar_parametro.php',
        data: cadena,
        success: function (respuesta) {
            if (respuesta == 1) {
                $('#tablaParametros').load('../V_Parametros/V_mantenimiento_parametros.php');
                alertify.success("Parámetro registrado correctamente.");
            } else {
                alertify.error("Fallo al guardar el parámetro.");
            }
        }
    });
}

function cargarDatosLectura(datos) {
    extraerDatos = datos.split('||');

    $('#Id_Parametro_L').val(extraerDatos[0]);
    $('#parametro_L').val(extraerDatos[1]);
    $('#valorParametro_L').val(extraerDatos[2]);
    $('#creadoPor_L').val(extraerDatos[3]);
    $('#fechaCreacion_L').val(extraerDatos[4]);
    $('#modificadoPor_L').val(extraerDatos[5]);
    $('#fechaModificacion_L').val(extraerDatos[6]);  
}

function cargarDatos(datos) {
    extraerDatos = datos.split('||');

    $('#Id_Parametro').val(extraerDatos[0]);
    $('#parametroE').val(extraerDatos[1]);
    $('#valorParametroE').val(extraerDatos[2]);
}

function actualizaParametro() {
    Id_Parametro = $('#Id_Parametro').val();
    parametroE = $('#parametroE').val();
    valorParametroE = $('#valorParametroE').val();

    cadena = "Id_Parametro=" + Id_Parametro +
        "&parametroE=" + parametroE +
        "&valorParametroE=" + valorParametroE;

    $.ajax({
        type: 'POST',
        url: '../C_Parametros/C_editar_parametro.php',
        data: cadena,
        success: function (respuesta) {
            if (respuesta == 1) {
                $('#tablaParametros').load('../V_Parametros/V_mantenimiento_parametros.php');
                alertify.success("Parámetro actualizado correctamente.");
            } else {
                alertify.error("Fallo al actualizar el parámetro.");
            }
        }
    });
}

function validarSiNo(Id_Parametro){
    alertify.confirm('Eliminar Parámetro', '¿Está seguro de eliminar el parámetro?', 
                  function(){ eliminarParametro(Id_Parametro) }
                , function(){ alertify.error('Parámetro no eliminado.')});
}

function eliminarParametro(Id_Parametro){
    cadena = "Id_Parametro=" + Id_Parametro;

    $.ajax({
        type: 'POST',
        url: '../C_Parametros/C_eliminar_parametro.php',
        data: cadena,
        success: function (respuesta) {
            if (respuesta == 1) {
                $('#tablaParametros').load('../V_Parametros/V_mantenimiento_parametros.php');
                alertify.success("Parámetro eliminado.");
            } else {
                alertify.error("Fallo al eliminar el parámetro.");
            }
        }
    });
}
