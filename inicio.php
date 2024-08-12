
<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        echo '
            <script>
            alert("Bienvenido"):
            window.location = "inicio.php"
            header = "index.php"
            </script>
        ';

    }else{
        echo '
        <script>
            alert("Debes de iniciar sesión"):
            window.location = "index.php"
            </script>
        ';
            session_destroy();


    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
    <h1>POR FAVOR LLENAR ESTO VICTOR</h1>



</body>
</html>