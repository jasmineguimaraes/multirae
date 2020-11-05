<?php
    require_once "conexaomultirae.php";
    
    $titulo = $_POST["titulo"] ?? null;//se "setado" recebe valor "nome" se não recebe null
    $local_mut = $_POST["local_mut"] ?? null;
    $dt_mut = $_POST["dt_mut"] ?? null;
    $descricao = $_POST["descricao"] ?? null;

    if(isset($_POST['enviar_mutirao'])) {
        $FormatosPermitidos = array("png","jpg", "jpeg", "gif");
        $extensao = pathinfo($_FILES['img_mutirao']['name'], PATHINFO_EXTENSION);

        //Verificando se a extensão do arquivo é compatível
        if(in_array($extensao, $FormatosPermitidos)){
            $pasta = "imagens/mutirao/";
            $temporario = $_FILES['img_mutirao']['tmp_name'];
            $novoNome = uniqid().".$extensao";

            //String de inserção no Banco de Dados
            $q = "INSERT INTO mutirao (titulo, local_mut, dt_mut, img_mut, descricao) 
            VALUES ('$titulo', '$local_mut', '$dt_mut', '$novoNome', '$local_mut')";
            
            //Confirmação de inserção
            if($banco->query($q)){
                echo "<h1>Cadastrado com sucesso!</h1>";
            }
            else{
                echo "<h1>Cadastro não efetuado :(.</h1>";
            }


        }else{
            echo "
                <script>
                alert('Formato não pertimitido. Só aceitamos arquivos dos tipos: png, jpg, jpeg, gif')
                </script>          
            ";
        }
    }
        
?>