<?php

    # Variaveis de controle
    $userReal = "admin";
    $passReal = "password";

    # Recebendo os dados do formulário
    $username = $_POST["username"];
    $password = $_POST['password'];    

    if ($username != $userReal || $password != $passReal) {
        header("location: ../index.php?msg=access_error");
    } else {

        session_start();

        $data['user'] = $username;
        $data['email'] = "admin@admin.com";
        $data['access'] = date("d/m/Y H:i:s");

        $_SESSION['user_data'] = $data;

        header("location: ../index.php");
    }