<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <?php 
    require('header.html')
    ?>
    <style>
        .text-caixa{
            font-size: .8em;
            float: right;
            margin: 0px;
            padding: 0px;
        }
    </style>

</head>

<body>

    <header>
        <nav class="menu">
            <?php 

       require('navbar.html')
       ?>
        </nav>
    </header>
    <?php 
        require_once "back-end/InsercaoUsuario.php";

    ?>

    <div class="main">
        <div class="publicacao">
            <div class="maincadastro">
                <h1>Cadastro</h1>
                <center>
                    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="post" id="formulariocadastro">
                        
                        <div>
                            <label for="nomec">Nome Completo:</label>
                            <input type="text" placeholder="Nome" name="nomec"><br><br>
                        </div>
                        <div>
                            <label for="dt_nasc">Data de Nascimento:</label>
                            <input type="date" placeholder="Data de Nascimento" name="dt_nasc"><br><br>
                        </div>
                        <div>
                            <label for="cpf">CPF:<span class="text-caixa">Formato: 000.000.000-00</span></label>
                            <input type="text" placeholder="000.000.000-00" name="cpf"><br><br>
                        </div>
                        <div>
                            <label for="telefone">Telefone:<span class="text-caixa">Formato: xx-00000-0000, sem traço</span></label>
                            <input type="number" placeholder="DDDxxxxxxxxx" name="telefone"><br><br>
                        </div>
                        <div>
                            <label for="cep">CEP:<span class="text-caixa">Formato: 00000-000</span></label>
                            <input type="text" placeholder="00000-000" name="cep"><br><br>
                        </div>
                        <div>
                            <label for="endereco">Endereço:<span class="text-caixa">Formato:Rua, Número, Bairro, Município</span></label>
                            <input type="text" placeholder="Rua, Número, Bairro, Município" name="endereco"><br><br>
                        </div>
                        <div>
                            <label for="email">Email:<span class="text-caixa">Formato: Emaildeexemplo@hotmail.com</span></label>
                            <input type="email" placeholder="Email" name="email"><br><br>
                        </div>
                        <div>
                            <label for="senha">Senha:</label>
                            <input type="password" placeholder="**********" name="senha"><br><br>
                        </div>
                        <div>
                            <label for="senhar">Repita a senha:</label>
                            <input type="password" placeholder="**********" name="senhar"><br><br>
                        </div>
                        <br><br>
                        <input type="submit" name="enviar-formulario" value="Enviar" class="btn1">
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