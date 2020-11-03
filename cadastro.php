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
                    <form action="/pagina-processa-dados-do-form" method="post" id="formulariocadastro">
                        <div>
                            <label for="name">Nome Completo:</label>
                            <input type="text" placeholder="Nome"><br><br>
                        </div>

                        <div>
                            <label for="CPF">CPF:</label>
                            <input type="number" placeholder="000.000.000-00"><br><br>
                        </div>
                        <div>
                            <label>Telefone:</label>
                            <input type="number" placeholder="Escreva seu telefone aqui"><br><br>
                        </div>
                        <div>
                            <label for="CEP">CEP:</label>
                            <input type="number" placeholder="00000-000"><br><br>
                        </div>
                        <div>
                            <label for="adress">Endereço:</label>
                            <input type="text" placeholder="Rua, Bairro, Número, Município"><br><br>
                        </div>
                        <div>
                            <label>Email:</label>
                            <input type="text" placeholder="Email"><br><br>
                        </div>
                        <div>
                            <label for="password">Senha:</label>
                            <input type="password" placeholder="**********"><br><br>
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