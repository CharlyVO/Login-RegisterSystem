<?php

    include('database__connection.php');

    session_start();

    // Inputs aren't empty
    if (strlen($_POST['user']) > 0 && strlen($_POST['password']) > 0) {
        // Get The Form Data
        $user = $_POST['user'];
        $password = $_POST['password'];

        // Encrypt Password
        $password = hash("sha512", $password);

        // Validate User
        $validateUser = mysqli_query($connection, "SELECT * FROM users WHERE userName = '$user' && password = '$password' ||    email = '$user' && password = '$password'");

        if (mysqli_num_rows($validateUser) > 0) {
            $_SESSION['logged__user'] = $user;
            header('location: ../homepage.php');
        } else {
            $_SESSION['alert'] = 'Usuario o Contraseña Incorrectos...';
            header('location: ../index.php');
        }
    
        mysqli_close($connection);
    } else {
        $_SESSION['alert'] = "Llene Todos Los Campos...";
        header("location: ../index.php");
    }


?>