<?php

    session_start();

    if(isset($_SESSION['ususario'])){
        header("location: inicio.php");
    }


?>




<!DOCTYPE htlml>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login y registro </title>
    <link rel="stylesheet" href="assets/css/style.css"
</head>

<body>

    <main>

        <div class="contenedor_todo">

            <div class="caja_trasera">

                <div class="caja_trasera_login">

                    <h3>¿Cuenta con un perfil ya creado?</h3>
                    <p>Inicia sesion para seguir</p>
                    <button id="btn_iniciar_sesion"> Iniciar Sesión</button>
                </div>

                <div class="caja_trasera_register">

                    <h3>¿Aún no cuenta con un perfil?</h3>
                    <p>Registrate para iniciar sesión</p>
                    <button id="btn_registrate"> Registrate</button>
                </div>

            </div>
            
            <div class="contenedor_login-register">

                <form action="php/login_usuario_be.php" method="POST" class="formulario_login">
                        <h2>Iniciar sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="passsword" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">

                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">

                    <input type="password" placeholder="Contraseña" name="contrasena"
                    required
                    minlength="8" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula y un número." />

                    <button>Registrarse</button>

                    

                </form>
            </div>

        </div>

    </main>
    
    <script src="assets/js/script.js"></script>
</body>
</html>




