<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query1 = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";



    $verificar_correo = mysqli_query($conexion1, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }


    
    $verificar_usuario = mysqli_query($conexion1, "SELECT * FROM usuarios WHERE usuario='$ususario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este ususario ya está registrado");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion1, $query1);

    if($ejecutar){
        echo '
        <script>
            alert("Registrado");
            window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intenta de nuevo");
                window.location = "../index.php";
            </script>
        ';
    }   

?>