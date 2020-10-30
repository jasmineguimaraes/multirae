<?php
    require_once "conexaomultirae.php";
    
    $nome = $_POST["nome"] ?? null;//se "setado" recebe valor "nome" se não recebe null
    //$dt_nasc = $_POST["dt_nasc"]) ?? null;
    $cpf = $_POST["cpf"] ?? null;
    $cep = $_POST["cep"] ?? null;
    $endereco = $_POST["endereco"] ?? null;
    $email = $_POST["email"] ?? null;
    $senha = $_POST["senha"] ?? null;
    
    //String de inserção no Banco de Dados
    $q = "INSERT INTO cadastro_usuario(nome, cpf, cep, endereco, email, senha) 
        VALUES ('$nome', '$cpf', '$cep', '$endereco', '$email', '$senha')";
    
    //Confirmação de inserção
    if ($banco->query($q)){
        echo "<h1>Cadastrado com sucesso!</h1>";
    }
    else{
        echo "<h1>Cadastro não efetuado :(.</h1>";
    }
?>