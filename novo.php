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

                <h1>Novo mutirão</h1>
                <center>
                    <form action="" method="post" id="formulariocadastro">
                        <div>
                            <label for="titulo">Título do mutirão</label>
                            <input type="text" placeholder="exemplo: Remoção de lixo na Rua Maria"
                                name="titulo"><br><br>
                        </div>
                        <div>
                            <label for="local">Local do mutirão</label>
                            <input type="text" placeholder="exemplo: Penha, Rua Cintra 45" name="local"><br><br>
                        </div>

                        <div>
                            <label for="data">Data do mutirão</label>
                            <input type="date" placeholder="" name="data"><br><br>
                        </div>

                        <div>
                            <label for="descricao">Descrição do mutirão</label>
                            <input type="textarea"
                                placeholder="exemplo: Vamos ajudar os moradores da Rua Cintra com a coleta de lixo"
                                name="descricao"><br><br>
                        </div>
                        <input type="submit" alue="Enviar" class="btn1">
                        <div class="divbtn">
                            <a href="./mutiroes.php"> <input type="button" class="btn1" value="Voltar"></a>
                        </div>
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