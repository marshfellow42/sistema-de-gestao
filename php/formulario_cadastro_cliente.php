<?php

    $newClient = array(
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "cpf" => $_POST["cpf"],
        "endereco" => $_POST["endereco"],
        "telefone" => $_POST["telefone"]
    );

    // File path
    $filePath = '../json/clientes.json';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Read existing JSON file
        $json = file_get_contents($filePath);

        // Decode JSON to PHP array
        $data = json_decode($json, true);

        // Add new client to the array
        $data[] = $newClient;
    } else {
        // If file doesn't exist, start with an empty array
        $data = array($newClient);
    }

    // Encode array to JSON format
    $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    // Write updated JSON data back to the file
    file_put_contents($filePath, $jsonData);

    // Redirect to clientes.php
    header("Location: ../clientes.php");
    exit(); // Ensure that no other code is executed after redirection