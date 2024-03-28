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

    $('#idCita_E').val(extraerDatos[0]);
    $('#tipoCita_E').val(extraerDatos[1]);
    $('#motivoCita_E').val(extraerDatos[2]);
    $('#nombrePaciente_E').val(extraerDatos[3]);
    $('#nombreDoctor_E').val(extraerDatos[4]);
    $('#fechaCita_E').val(extraerDatos[5]); 
    $('#horaCita_E').val(extraerDatos[6]);   
}

function actualizarCita() {

    idCita_E = $('#idCita_E').val();
    tipoCita_E = $('#tipoCita_E').val();
    motivoCita_E = $('#motivoCita_E').val();
    nombreDoctor_E = $('#nombreDoctor_E').val();
    fechaCita_E = $('#fechaCita_E').val(); 
    horaCita_E = $('#horaCita_E').val();   

    cadena = "idCita_E=" + idCita_E +
        "&tipoCita_E=" + tipoCita_E +
        "&motivoCita_E=" + motivoCita_E +
        "&nombreDoctor_E=" + nombreDoctor_E +
        "&fechaCita_E=" + fechaCita_E +
        "&horaCita_E=" + horaCita_E;

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
