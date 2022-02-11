<?php 

    session_start();

    if (!isset($_SESSION['logged__user'])) {
        echo '
            <script>
                alert("Inicie Sesion Antes de Continuar!!");
                window.location = "index.php";
            </script>
        ';
        exit();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/homepage__styles.css">
</head>
<body>
    <!-- General Container Starts -->
    <section class="general__container">
        <div class="content__container">
            <?php
                if (isset($_SESSION['logged__user'])) {
            ?>    
                <h1><?= $_SESSION['logged__user'] ?></h1>
            <?php
                }
            ?>
            <h2>Bienvenido a la Pagina Principal.</h2>
            <a href="php/logout.php" class="logout">Cerrar Sesion</a>
        </div>
    </section>
    <!-- General Container Ends -->
</body>
</html>