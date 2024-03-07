<?php
require_once('../Vistas/Index.php');
function verificarCaptcha() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6Ldm1oIpAAAAAKe0hWb_hhszqrav2mxz6mzop35-";
    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
    $atributos = json_decode($respuesta, TRUE);
    if (!$atributos["success"]) {
        echo '
            <script>
                alert("Por favor, Verifica el Captcha.");
                window.location = "../Vistas/Index.php";
            </script>
        ';}
}

// Llamamos a la función para verificar el captcha

?>
