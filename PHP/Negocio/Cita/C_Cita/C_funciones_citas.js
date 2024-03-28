function insertarCita(motivoCita, fechaCita, horaCita, nombrePaciente, tipoCita, nombreDoctor) {
    cadena = "motivoCita=" + motivoCita +
        "&fechaCita=" + fechaCita +
        "&horaCita=" + horaCita +
        "&nombrePaciente=" + nombrePaciente +
        "&tipoCita=" + tipoCita +
        "&nombreDoctor=" + nombreDoctor;
    $.ajax({
        type: 'POST',
        url: '../C_Cita/C_guardar_cita.php',
        data: cadena,
        success: function (respuesta) {
            if (respuesta == 1) {
                $('#tablaCitas').load('../V_Cita/V_gestion_cita.php');
                alertify.success("Cita registrada correctamente.");
            } else {
                alertify.error("Fallo al guardar la cita.");
            }
        }
    });
}

function cargarDatosLectura(datos) {
    extraerDatos = datos.split('||');

    $('#idCita_L').val(extraerDatos[0]);
    $('#tipoCita_L').val(extraerDatos[1]);
    $('#motivoCita_L').val(extraerDatos[2]);
    $('#nombrePaciente_L').val(extraerDatos[3]);
    $('#nombreDoctor_L').val(extraerDatos[4]);
    $('#fechaCita_L').val(extraerDatos[5]); 
    $('#horaCita_L').val(extraerDatos[6]);    
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
        url: '../C_Cita/C_editar_cita.php',
        data: cadena,
        success: function (respuesta) {
            if (respuesta == 1) {
                $('#tablaCitas').load('../V_Cita/V_gestion_cita.php');
                alertify.success("Cita actualizada correctamente.");
            } else {
                alertify.error("Fallo al actualizar la cita.");
            }
        }
    });
}

function validarSiNo(idCita_L){
    alertify.confirm('Eliminar Cita', '¿Estás seguro de eliminar la cita?', 
                  function(){ eliminarParametro(idCita_L) }
                , function(){ alertify.error('Cita no eliminada.')});
}

function eliminarParametro(idCita_L){
    cadena = "idCita_L=" + idCita_L;

    $.ajax({
        type: 'POST',
        url: '../C_Cita/C_eliminar_cita.php',
        data: cadena,
        success: function (respuesta) {
            if (respuesta == 1) {
                $('#tablaCitas').load('../V_Cita/V_gestion_cita.php');
                alertify.success("Cita eliminada.");
            } else {
                alertify.error("Fallo al eliminar la cita.");
            }
        }
    });
}
