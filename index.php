<?php

    session_start();

    if (isset($_SESSION['logged__user'])) {
        header('location: homepage.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register System</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- General Container Starts -->
    <section class="general__container">
        <!-- Notifications Container Starts -->
        <?php
            if (isset($_SESSION['alert'])) {
        ?>
            <div class="notification__container" id="notification" style="visibility: visible;">
            <h3><?= $_SESSION['alert'] ?></h3>
            </div>
        <?php
            }

            session_unset();
        ?>
        <!-- Notifications Container Ends -->

        <!-- Content Container Starts -->
        <div class="content__container">
            <!-- Background Box Container Starts -->
            <div class="background__container">
                <!-- Background Box Login Starts -->
                <div class="login__box box" id="login__box">
                    <h2>¿Ya tienes una cuenta?</h2>
                    <p>Inicia sesion para entrar a la pagina.</p>
                    <button class="button" id="btn__login">Iniciar Sesion</button>
                </div>
                <!-- Background Box Login Ends -->

                <!-- Background Box Register Starts -->
                <div class="register__box box" id="register__box">
                    <h2>¿Aun no tienes una cuenta?</h2>
                    <p>Registrate para que puedas iniciar sesion.</p>
                    <button class="button" id="btn__register">Registrarse</button>
                </div>
                <!-- Background Box Register Ends -->
            </div>
            <!-- Background Box Container Ends -->

            <!-- Forms Container Starts -->
            <div class="forms__container" id="forms__container">
                <!-- Login Form Starts -->
                <form action="php/login.php" method="POST" class="form" id="login__form">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Usuario o Correo" class="input" name="user">
                    <input type="password" placeholder="Contraseña" class="input" name="password">
                    <div class="checkbox">
                        <input type="checkbox" id="check">
                        <label for="check">Recordar</label>
                    </div>
                    <button class="button">Entrar</button>
                    <p>¿Olvidaste tu contraseña?</p>
                </form>
                <!-- Login Form Ends -->

                <!-- Register Form Starts -->
                <form action="php/register__user.php" method="POST" class="form" id="register__form">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" class="input" name="name">
                    <input type="email" placeholder="Correo Electronico" class="input" name="email">
                    <input type="text" placeholder="Nombre de Usuario" class="input" name="userName">
                    <input type="password" placeholder="Contraseña" class="input" name="password">
                    <button class="button">Registrarse</button>
                </form>
                <!-- Register Form Ends -->
            </div>
            <!-- Forms Container Ends -->
        </div>
        <!-- Content Container Ends -->
    </section>
    <!-- General Container Ends -->

    <!-- Script -->
    <script src="js/script.js"></script>
</body>

</html>