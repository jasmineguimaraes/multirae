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
            <h1>Mutirões</h1>
        </div>
        
        <div class="divbtn">
            <center><a href="./novo.php"> <input type="button"  class="btn2" value="Comece um mutirão" ></a></center>
        </div>

        <!-- mutiroes -->
        <div class="mainmutiroes">
            <?php
                require_once "back-end/conexaomultirae.php";

                $sqlm = "select * from mutirao";
                $result = $banco->query($sqlm);

                if($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()){
            ?>
                <div class="mt">
                    <img src="imagens/mutirao/<?php echo $rows["img_mut"]; ?>">
                    <h3><?php echo $rows["titulo"]; ?></h3>
                    <p><?php echo $rows["descricao"]; ?></p>
                </div>
            <?php
                    }
                } else {
                    echo "Nenhum mutirão cadastrado!";
                    }
            ?> 
        </div>
               
    <div>


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
</html>