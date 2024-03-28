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
            contenedorCaptcha.style.display = "none";
          } else {
            contenedorCaptcha.style.display = "block";       
          }
        }
      };
      xhr.send('correo=' + correo);
    }
  });
});

