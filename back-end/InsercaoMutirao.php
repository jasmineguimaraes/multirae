<?php
    require_once "conexaomultirae.php";
    
    $titulo = $_POST["titulo"] ?? null;//se "setado" recebe valor "nome" se não recebe null
    $local_mut = $_POST["local_mut"] ?? null;
    $dt_mut = $_POST["dt_mut"] ?? null;
    $descricao = $_POST["descricao"] ?? null;


    if(isset($_POST['enviar_mutirao'])) {
       //$FormatosPermitidos = array("png","jpg", "jpeg", "gif");
       // $extensao = pathinfo($_FILES['img_mut']['name'], PATHINFO_EXTENSION);

        //Verificando se a extensão do arquivo é compatível
        //if(in_array($extensao, $FormatosPermitidos)){
         //   $pasta = "../imagens/mutirao/";
         //   $temporario = $_FILES['img_mut']['tmp_name'];
          //  $novoNome = uniqid().".$extensao";

           // if(move_uploaded_file($temporario, $pasta.$novoNome)){
            //   $mensagem = "Upload Feito com sucesso!";
            //    print($mensage);
          //  }


            $q = "INSERT INTO mutirao (titulo, local_mut, dt_mut, descricao) 
            VALUES ('$titulo', '$local_mut', '$dt_mut','$descricao')";
            
            //Confirmação de inserção
            if($banco->query($q)){
                echo "<h1>Cadastrado com sucesso!</h1>";


            //String de inserção no Banco de Dados
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
            }
            else{
                echo "<h1>Cadastro não efetuado :(.</h1>";
            }


        }
        
?>