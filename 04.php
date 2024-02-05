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
    <h1>Harjutused 04</h1>

    <h2>Hindamine</h2>
    <form action="#" method="get">
        <label for="punktid">Sisesta punktid</label>
        <input type="number" name="punktid" id="punktid"><br>
        <input type="submit" class="btn btn-success my-2" value="Anna hinne">
    </form>
    <?php
        if (!empty($_GET['punktid'])) {
            $punktid = $_GET['punktid'];
            var_dump($punktid);
            switch($punktid){ 
            case ($punktid>10): echo 'SUPER!'; 
            break; 
            case ($punktid>=5): echo 'TEHTUD!';
            break;
            case ($punktid<5): echo 'RAHULDAV!';
            break;
            default: echo 'Sisesta oma punktid'; 
            } 
        }
    ?>
    <h2>Juubel</h2>
    <form action="#" method="get">
        <label for="aasta">Sisesta sünniaasta</label>
        <input type="number" name="aasta" id="aasta"><br>
        <input type="submit" class="btn btn-success my-2" value="Leia juubel">
    </form>
    <?php
    if(!empty($_GET['aasta'])){
        $a = $_GET['aasta'];
        $hetkeaasta = date("Y"); 
        // var_dump($hetkeaasta);
        // var_dump($a);
        // var_dump($hetkeaasta-$a % 5);
        if (($hetkeaasta-$a) % 5 == 0) {
            echo 'Juubel!<br>';
        } else {
            echo 'Ei ole juubel!<br>';
        }
    }
    ?>
    <hr>


<?php
$a = 4;
$b = 4;


if ($a==$b){
    echo 'Arvud on võrdsed<br>';
    echo "<img src=\"http://matemaatika.edu.ee/sisu/0156/joonis1.gif\" >";
} else {
    echo 'Arvud ei ole võrdsed<br>';
}




    $vanus = 5;
    $vanus2 = 5;

    if ($vanus > $vanus2) {
        echo "Esimene vanus on suurem kui teine<br>";
    } else if ($vanus < $vanus2) {
        echo "Teine vanus on suurem kui esimene<br>";
    } else {
        echo "Vanused on võrdsed<br>";
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
