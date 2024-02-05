<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
<div class="container">
    <div class="row">
        <?php
    for ($i=1; $i < 7; $i++) { 
        echo '<div class="col-sm-2"><img src="'.$pilt.'" alt=""></div>';
    }

?>
        

    </div>




    <h1>Harjutused 03</h1>
    <h2>Trapetsi pindala</h2>
    <form action="#" method="get">
        <label for="a">Külg a</label>
        <input type="number" name="a" id="a"><br>
        <label for="b">Külg b</label>
        <input type="number" name="b" id="b"><br>
        <label for="h">Kõrgus h</label>
        <input type="number" name="h" id="h"><br>
        <input type="submit" class="btn btn-success my-2" value="Arvuta">
    </form>
    <?php
    if(!empty($_GET['a']) && !empty($_GET['b']) && !empty($_GET['h'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $h = $_GET['h'];
        $s = (($a+$b)/2)*$h;
        echo 'Trapetsi pindala on '.$s.'<br>';
    }
    ?>
    <hr>
    <h2>Rombi ümbermõõt</h2>
    <form action="#" method="get">
        <label for="c">Rombi külg:</label>
        <input type="number" name="c" id="a">
        <input type="submit" class="btn btn-success my-2" value="Arvuta">
    </form>
    <?php
    try {
        if(!empty($_GET['c']) && !empty($_GET['d']) && $_GET['d'] > 0){
            $c = $_GET['c'];
            $p = 4*$c;
            echo 'Rombi ümbermõõt on '.$p.'<br>';
        }
    } catch (\Throwable $th) {
        echo "Probleem sisestuses<br>";
    }
  
    ?>
    <h1>Harjutused 04</h1>
    


<?php
$a = 4;
$b = 4;


if ($a==$b){
    echo 'Arvud on võrdsed<br>';
    echo "<img src=\"http://matemaatika.edu.ee/sisu/0156/joonis1.gif\" >";
} else {
    echo 'Arvud ei ole võrdsed<br>';
}


?>




</div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
