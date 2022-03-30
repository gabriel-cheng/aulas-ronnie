<?php
    // Definindo uma variável para acessar o banco de dados
    $_dns = "mysql:host=localhost;dbname=login2022";
    $_user = "root";
    $_senha = "";

    try {
        $conexao = new PDO($_dns, $_user, $_senha); // PDO é uma forma de acesso ao banco de dados
    }
    catch (PDOException $erro) {
        echo 'ERRO: '.$erro -> getCode();
        echo 'Mensagem: '.$erro -> getMessage();
    }
