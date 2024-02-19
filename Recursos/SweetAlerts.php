<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title></title>
</head>
<body>
    
</body>
</html>

<script>

    function MostrarAlerta(icon, title, message, url) {
        Swal.fire({
            icon: icon,
            title: title,
            text: message,
        }).then(() => {
            window.location = url;
        });
    }
    

</script>