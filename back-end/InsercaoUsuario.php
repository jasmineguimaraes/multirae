<?php
    require_once "conexaomultirae.php";
if(isset($_POST['enviar-formulario'])){
    $nomec = $_POST["nomec"];
    $dt_nasc = $_POST["dt_nasc"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"] ;
    $senha = $_POST["senha"] ;
    
      
        $q = "INSERT INTO cadastro_usuario (nomec, dt_nasc, cpf, telefone, cep, endereco, email, senha) 
            VALUES ('$nomec', '$dt_nasc', '$cpf', '$telefone', '$cep', '$endereco', '$email', '$senha')";
            
    //Confirmação de inserção
    if ($banco->query($q)){
        echo"<h1>CADASTRO EFETUADO COM SUCESSO! </h1>";
        echo 
            "<script>
                    alert('CADASTRO EFETUADO COM SUCESSO!')
            </script>";
    
    
    }
    else{
        echo"<script>alert('FALHA AO CADASTRAR!')</script>";
    }
    
}
?>

