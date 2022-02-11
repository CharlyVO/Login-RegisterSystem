<?php

    include('database__connection.php');

    session_start();

    // Inputs aren't empty
    if (strlen($_POST['name']) > 0 && strlen($_POST['email']) > 0 && strlen($_POST['userName']) > 0 && strlen($_POST['password']) > 0) {
        // Get The Form Data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        // Encrypt Password
        $password = hash("sha512", $password);

        // Validate Email
        $validateEmail = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($validateEmail) > 0) {
            $_SESSION['alert'] = 'El Correo Ya Esta Registrado...';
            header('location: ../index.php');
            mysqli_close($connection);
            exit();
        }

        // Validate User Name
        $validateUserName = mysqli_query($connection, "SELECT * FROM users WHERE userName = '$userName'");
        if (mysqli_num_rows($validateUserName) > 0) {
            $_SESSION['alert'] = 'El Nombre de Usuario Ya Esta Registrado...';
            header('location: ../index.php');
            mysqli_close($connection);
            exit();
        }

        // Query
        $query = "INSERT INTO users VALUES(NULL, '$name', '$email','$userName', '$password')";

        // Execute Query
        $execute = mysqli_query($connection, $query);

        if ($execute) {
            $_SESSION['alert'] = "Usuario Registrado Correctamente!!";
            header("location: ../index.php");
        } else {
            $_SESSION['alert'] = "Error en el Registro...";
            header("location: ../index.php");
        }

        mysqli_close($connection);
    } else {
        $_SESSION['alert'] = "Llene Todos Los Campos...";
        header("location: ../index.php");
    }

?>