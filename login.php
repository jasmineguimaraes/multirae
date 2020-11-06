<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <?php 
    require('header.html')
    ?>

</head>

<body>

    <header>

        <nav class="menu">

            <?php 

require('navbar.html');
require_once "back-end/VerificarLogin.php";
?>
        </nav>
    </header>


    <div class="main">
        <div class="publicacao">
            <div class="maincadastro">

                <h1>Login</h1>
                <center>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="formulariocadastro">
                        <div>
                            <label for="email_log">E-mail</label>
                            <input type="email" placeholder="email" name="email_log"><br><br>
                        </div>
                        <div>
                            <label for="senha_log">Senha:</label>
                            <input type="password" placeholder="**********" name="senha_log"><br><br>
                        </div>
                        <br><br>
                        <input type="submit" value="Enviar" name="Enviar" class="btn1">
            </div>
            </form>
            </center>
        </div>
    </div>
    </div>

    <div class="footer">
    <?php require('footer.php') ?>
    </div>

</body>


</body>

</html>