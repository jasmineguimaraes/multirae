
<?php
    require_once "conexaomultirae.php";
    
    if(isset($_POST['Enviar'])){
        $email_log = $_POST['email_log'];
        $senha_log = $_POST["senha_log"];
        if(is_null($email_log) || is_null($senha_log)){
            echo "<script>alert('Os campos nao podem estar em branco')</script>";
        }
        else{
            $sql = "SELECT email,senha from cadastro_usuario where email = '$email_log' and senha = '$senha_log' LIMIT 1";
            
            $busca = $banco->query($sql);
            if(!$busca){
                echo "<script>alert('FALHA AO ACESSAR O BANCO')<\script>";
            }
            else{

                if($busca->num_rows > 0){
                    echo "<script>alert('PARABENS! VC ESTÁ LOGADO!!')</script>";
                    header('Location:index.php');
                }
                else{
                    echo "<script>alert('LOGIN OU SENHA INCOMPATÍVEIS!')</script>";
                }
            }
            
        }
    }
?>
