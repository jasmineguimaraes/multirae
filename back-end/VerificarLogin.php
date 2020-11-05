<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="stylesheet" href="../CSS/global.css">
            <link rel="stylesheet" href="../CSS/style.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Multiraê</title>
        </head>
    </html>

<?php
    require_once "conexaomultirae.php";
    require('../header.html');
    
    $email_log = $_POST["email_log"] ?? null;//se "setado" recebe valor "nome" se não recebe null
    $senha_log = $_POST["senha_log"] ?? null;
    
    if($email_log !="" && $senha_log !=""){
        $sql = "select * from cadastro_usuario where email = '$email_log' and senha = '$senha_log'";

        $result = $banco->query($sql);
            if($result and $result->num_rows > 0 ){
                while($rows = $result->fetch_assoc()){
?>
<!DOCTYPE html>
    <html lang=”pt-br”>
        <body>
            <header>
                <nav class="menu">                    
                    <?php require('navbar_back.html')?>
                </nav>
            </header>
                <div class="main">
                    <div class="publicacao">
                        <h1><?php echo $rows['nomec'],", Multiraê!";?></h1>
                    </div>
<?php                    
                }           
            }   else{echo "<script>alert('E-MAIL ou/e SENHA com erro.')</script>";
                
?>

    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="stylesheet" href="../CSS/global.css">
            <link rel="stylesheet" href="../CSS/style.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Multiraê</title>
        </head>
        <body>
            <div class="main">
                <div class="divbtn">
                    <a href="../cadastro.php"><input type="button" class="btn1" value="Cadastre-se!"></a>
                </div>
            </div>
        </body>
    </html>
                
<?php
}
    }              else{
                        echo "<script>alert('Click no botão para retornar à página anterior')</script>";
                        echo "<script>alert('Verifique campos não preenchidos')</script>";
                    }
    
?>