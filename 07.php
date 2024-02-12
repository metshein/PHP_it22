<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

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
        <h1>Sammu pikkus</h1>

        <?php

            $n1 = 0;
            $n2 = 0;
            $n3 = 0;

            if (!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['n3'])){
                $n1 = $_GET['n1'];
                $n2 = $_GET['n2'];
                $n3 = $_GET['n3'];
            }
        ?>
        Arvud
        koosta funktsioon, mis lubab kasutajal valida arvude vahemikku. Näiteks 2 ja 8, tekitavad 2, 3, 4, 5, 6, 7, 8
        täienda funktsiooni nii, et saab muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8

        <form action="" method="get">
            Start: <input type="number" name="n1" value="<?php echo $n1;?>"> Finish: <input type="number" name="n2"value="<?php echo $n2;?>"> Sam: <input type="number" name="n3" value="<?php echo $n3;?>"><input type="submit" value="Näita">
        </form>
        <?php
        function arvud(){
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $n3 = $_GET['n3'];
            if ($n1 < $n2) {
                for($i = $n1; $i <= $n2; $i += $n3){
                    echo $i."<br>";
                }
            }
        }

        if(!empty($_GET['n1']) && !empty($_GET['n2']) && !empty($_GET['n3'])){
            arvud();
        }

        ?>  

        <h1>Genereeri</h1>  




        
        <!-- 
  
        
   
    Ristküliku pindala
        koosta funktsioon, mis leiab kasutaja antud arvudega ristkülikupindala
    Isikukood
        koosta funktsioon, mis leiab, kas sisestatud isikukood on õige pikkusega
        täienda funktsiooni, et kui isikukood on kirjas leitakse sugu ja sünniaeg
    Head mõtted
        koosta funktsioon, mis hoiab endas kolme ühepikkust massiivi: alus, öeldis ja sihitis
        koosta kood, mis lehele laadimisel valib suvaliselt igast massiivist elemendi ja koostab lause -->




        <?php
        function tervitus(){
            echo "Tere päiksekesekene!";
        }
      

        function uudiskiri(){
            echo '
            <form action="" method="get">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Liitu uudiskirjaga</label>
                    <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                    />  
                </div>
                <button type="submit" class="btn btn-primary">Liitu</button>
            </form>';
        }

        uudiskiri();
        tervitus();
        ?>

<form action="" method="get">kasutaja: <input type="text" name="kasutja"><input type="submit" value="Tee kasutaja"></form>
<?php
function kasutaja(){
    $kasutaja = $_GET['kasutja'];
    $kasutaja = strtolower($kasutaja);
    $kasutaja = $kasutaja."@hkhk.edu.ee";
    $kood = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 7)), 0, 7);
    echo "Kasutaja: ".$kasutaja."<br>";
    echo "Kood: ".$kood;
}

if(!empty($_GET['kasutja'])){
    kasutaja();
}
?>


        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
