<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Harjutused 01</h1>
    
    <?php
    /*
        Ülesanne 1
        Mario Metshein
        24.09.2021
    */
    $nimi = "Mario";
    $synniaasta = 1980;
    $tahtkuju = "skorpion";

    echo "Minu - $nimi<br>Sünniaasta - $synniaasta<br>Tähemärk - $tahtkuju<br><br>";
    echo  "\"It's My Life\" – Dr. Alban<br>";
    echo "(\\(\\<br>( -.-)<br>o_(\")(\")<br><br>";
    ?>
    <h1>Harjutused 02</h1>
    <?php
    /*
        Ülesanne 2
        Mario Metshein
        24.09.2021
    */
    
    //matemaatika
    $arv1 = 10;
    $arv2 = 20;
    $liit = $arv1 + $arv2;
    $lahut = $arv1 - $arv2;
    $korrut = $arv1 * $arv2;
    $jaga = $arv1 / $arv2;
    $jaak = $arv1 % $arv2;

    echo "$arv1 + $arv2 = $liit<br>";
    echo "$arv1 - $arv2 = $lahut<br>";
    echo "$arv1 * $arv2 = $korrut<br>";
    echo "$arv1 / $arv2 = $jaga<br>";
    echo "$arv1 % $arv2 = $jaak<br><br>";

    //mm teisendamine
    $mm = 162.556;
    $cm = $mm / 10;
    $m = $mm / 1000;
    printf ("%.2f mm on %.2f cm või %.2f m<br><br>", $mm, $cm, $m);

    //täisnurkne kolmnurk
    $a = 3;
    $b = 4;
    $c = 5;

    $p = $a + $b + $c;
    $s = ($a * $b) / 2;

    printf ("Kolmnurga ümbermõõt on %d ja pindala on %d<br><br>", $p, $s);

    ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>