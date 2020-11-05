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

       require('navbar.html')
       ?>
        </nav>
    </header>


    <div class="main">
        <div class="publicacao">
            <div class="maincadastro">
                <h1>Cadastro</h1>
                <center>
                    <form action="back-end/InsercaoUsuario.php" method="post" id="formulariocadastro">
                        <div>
                            <label for="cad_tipo">Tipo de Cadastro:</label>
                            <select name="cad_tipo">
                                <option value="usuario" selected>usuário</option>
                                <option value="adm">administrador</option>
                            </select>
                            <input type='password' placeholder='Para o tipo "administrador", digite a senha master.' name='senham'>
                            <br><br>
                        </div>
                        <div>
                            <label for="nomec">Nome Completo:</label>
                            <input type="text" placeholder="Nome" name="nomec"><br><br>
                        </div>
                        <div>
                            <label for="dt_nasc">Data de Nascimento:</label>
                            <input type="date" placeholder="Data de Nascimento" name="dt_nasc"><br><br>
                        </div>
                        <div>
                            <label for="cpf">CPF:</label>
                            <input type="text" placeholder="000.000.000-00" name="cpf"><br><br>
                        </div>
                        <div>
                            <label for="telefone">Telefone:</label>
                            <input type="number" placeholder="DDDxxxxxxxxx" name="telefone"><br><br>
                        </div>
                        <div>
                            <label for="cep">CEP:</label>
                            <input type="text" placeholder="00000-000" name="cep"><br><br>
                        </div>
                        <div>
                            <label for="endereco">Endereço:</label>
                            <input type="text" placeholder="Rua, Número, Bairro, Município" name="endereco"><br><br>
                        </div>
                        <div>
                            <label for="email">Email:</label>
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
                        <input type="submit" alue="Enviar" class="btn1">
            </div>
            </form>
            </center>
        </div>
    </div>
    </div>

    <div class="footer">
        <div class="empresa">

            <h2>Logo</h2>
            <ul class="footer-list">
                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
            </ul>
        </div>

        <div class="redes">
            <h2>Segue a gente</h2>
            <ul class="footer-list">

                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
            </ul>

        </div>

        <div class="contato">
            <h2>Fale Conosco</h2>
            <ul class="footer-list">

                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
            </ul>
        </div>

        <div class="sobre">
            <h2>Sobre a Multiraê</h2>
            <ul class="footer-list">
                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
                <li> a </li>
            </ul>
        </div>
    </div>

</body>


</body>

</html>