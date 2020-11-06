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
        <form action="" method="post">

            <div class="mainmutiroes">
                <?php
                require_once "back-end/conexaomultirae.php";

                $sql = "select * from mutirao";
                $result = $banco->query($sql);

                if($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()){
                ?>
                <div class="mt">
                    <h3><?php echo $rows["titulo"]; ?></h3>
                    <p><?php echo $rows["descricao"]; ?></p>
                    <p style="font-size:1.2em; text-align:center;position:relative;">
                    Data: <?php $d = explode("-", $rows['dt_mut']);
                                echo "$d[2]/$d[1]/$d[0]";
                            ?></p>
                </div>
                <?php
                    }
                } else {
                    echo "Nenhum mutirão cadastrado!";
                    }
                ?>  
            </div>  
        </form>
    </div>

    <div class="footer">
    <?php require('footer.php') ?>
    </div>

</body>
</html>