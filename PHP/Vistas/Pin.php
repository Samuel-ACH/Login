<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equivs="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../EstilosLogin/css/EstilosPin.css">
    <title>Solicitud de Pin de Seguridad</title>
</head>
<body>
    <main>
        <div>
            <form method="POST">
                <h2>Pin de Seguridad</h2>
                <p>Ingresa un nuevo Pin</p> 

                <div class="input-wrapper">
                    <input type="int" name="pin" placeholder="Ingresa tu pin de seguridad">
                    <img class="input-icon" src="../../Imagenes/password.svg" alt="">
                </div>
                <div class="input-wrapper">
                    <input type="int" name="pin" placeholder="Ingresa nuevamente tu Pin">
                    <img class="input-icon" src="../../Imagenes/password.svg" alt="">
                </div>
                <input class="btn" type="submit" name="register" value="Enviar">
            </form>
        </div>
    </main>
</body>
</html>