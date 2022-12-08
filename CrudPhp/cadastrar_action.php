<?php
    require 'config.php';

    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $email = filter_input(INPUT_POST, 'email');

    $sql = $pdo->prepare("INSERT INTO usuario (nome, cpf, email) VALUES (:nome, :cpf, :email)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':email', $email);
    $sql->execute();

    header("Location: index.php");