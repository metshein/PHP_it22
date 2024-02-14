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
    <h1>Harjutus 12</h1>
    <h2>Sõiduaeg</h2>
    <form action="#" method="GET">
        <label for="start">Start</label>
        <input type="time" name="start" id="start" value="13:30"> 
        <label for="finish">Finiš</label>
        <input type="time" name="finish" id="finish" value="17:46">
        <input type="submit" value="Leia aeg">
    </form>  
    <?php
  //  if (!empty($_GET['start']) && !empty($_GET['finish'])) {
        $start = strtotime($_GET['start']);
        $finish =strtotime($_GET['finish']);
        $mins = ($finish - $start) / 60;
        $hh = $mins/60;
        $mm = $mins%60;

        printf ("<p class='fs-1'>%d:%d</p><br>", $hh, $mm);
   // }
?>

<h2>Palkade võrdlus</h2>
<?php

    $fail =  fopen('tootajad.csv', 'r');
    while(!feof($fail)){
        $rida = fgetcsv($fail, filesize('tootajad.csv'),';');
        print_r($rida);
    }

    // $mehed = 0;
    // $meeste_palk = 0;
    // $naised = 0;
    // $naised_palk = 0;
    
    // $allikas = 'tootajad.csv';
    // $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
    // while(!feof($minu_csv)){
    //     $rida = fgetcsv($minu_csv, filesize($allikas),';');
    //     print_r($rida);
    // }
    // fclose($minu_csv);
?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>