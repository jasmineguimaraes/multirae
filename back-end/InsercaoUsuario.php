<?php
    require_once "conexaomultirae.php";
    
    $cad_tipo = $_POST["cad_tipo"] ?? null;//se "setado" recebe valor "nome" se não recebe null
    $senham = $_POST["senham"] ?? null;
    $nomec = $_POST["nomec"] ?? null;
    $dt_nasc = $_POST["dt_nasc"] ?? null;
    $cpf = $_POST["cpf"] ?? null;
    $telefone = $_POST["telefone"] ?? null;
    $cep = $_POST["cep"] ?? null;
    $endereco = $_POST["endereco"] ?? null;
    $email = $_POST["email"] ?? null;
    $senha = $_POST["senha"] ?? null;
    $senhar = $_POST["senhar"] ?? null;
    
    //String de inserção no Banco de Dados
    if($nomec !="" && $dt_nasc !="" && $cpf !="" && $telefone !="" && $cep !="" && $endereco !="" && 
        $email !="" && $senha !="" && $senhar !="" && $senha === $senhar){
        
        $q = "INSERT INTO cadastro_usuario (cad_tipo, nomec, dt_nasc, cpf, telefone, cep, endereco, email, senha) 
            VALUES ('$cad_tipo', '$nomec', '$dt_nasc', '$cpf', '$telefone', '$cep', '$endereco', '$email', '$senha')";
            
                if(($cad_tipo==="adm" && $senham==="12345") || $cad_tipo==="usuario"){
    //Confirmação de inserção
    if ($banco->query($q)){
        echo "<h1>Cadastrado com sucesso!</h1>";
   
?>

        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro Multiraê</title>
        </head>
        <body>
            <h3><a href='../mutiroes.php'>Mutirões</a><h3>
        </body>
        </html>
        
<?php
    }}else{echo "<script>
                        alert('Se administrador, verifique a senha master.')
                    </script>";
                echo "<script>
                        alert('Se usuário, CPF ou E-MAIL já constam nos nossos registros para um mesmo voluntário.')
                    </script>";
                echo "<script>
                        alert('Click no botão para retornar à página anterior')
                    </script>"; 
    }}else{
        echo "<script>
                alert('Verifique campos não preenchidos e se SENHA é igual a REPITA A SENHA')
            </script>";
            echo "<script>
                    alert('Click no botão para retornar à página anterior')
                </script>";
    }
?>