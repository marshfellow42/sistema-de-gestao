<?php

    $newClient = array(
        "nome" => $_POST["nome"],
        "codigo" => $_POST["codigo"],
        "nome_fornecedor" => $_POST["nome_fornecedor"],
        "pre_compra" => $_POST["pre_compra"],
        "pre_venda" => $_POST["pre_venda"],
        "quantidade" => $_POST["quantidade"],
        "lucro_possivel" => $_POST["lucro_possivel"]
    );

    // File path
    $filePath = '../json/produtos.json';

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
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Write updated JSON data back to the file
    file_put_contents($filePath, $jsonData);

    // Redirect to clientes.php
    header("Location: ../produtos.php");
    exit(); // Ensure that no other code is executed after redirection