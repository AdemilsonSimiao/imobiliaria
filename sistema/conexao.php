<?php

    $nome_site = 'IMOBILIÁRIA SIMIÃO';

    //Conexão com banco de dados local
    $usuarios = 'root';
    $senha = '';
    $banco = 'imobiliaria';
    $servidor = 'localhost';
    
    $dsn = "mysql:dbname=$banco;host=$servidor;charset=utf8";
    $pdo = new \PDO($dsn, $usuarios, $senha);
    

?>

