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
<h1>Tüdrukud</h1>
<?php
$tydrukud = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz");

$rand_keys = array_rand($tydrukud, 1);
// var_dump($rand_keys);
echo $tydrukud[$rand_keys] . "<br>";




$counter = 0;
foreach ($tydrukud as $tydruk) {
    if($counter==3){
        break;
    }
    $counter++;

    echo "$tydruk<br>";
}

$a=array("red","green","blue","yellow","brown");
$tykid = array_slice($a,2);
foreach ($tykid as $tykk) {
    echo "$tykk<br>";
}

?>
            <h1>Massiivid</h1>


        <h2>Palgad</h2>
            <form action="#" method="get">
                <input type="text" name="firma" id="firma">
                <input type="submit" value="Eemalda firma">
            </form>
        <?php
        $firmad = ["Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia","Yakitri","Yodo","Youtags","Yambee","Yabox","Yodo","Yodoo"];

        if(!empty($_GET['firma'])){
            $firma = $_GET['firma'];
            $key = array_search($firma, $firmad);
            unset($firmad[$key]);
        }

        foreach ($firmad as $firma) {
            echo "$firma<br>";
         }

if(!empty($_GET['firma'])){
    $vanus = 5;

    if($vanus < 18){
        echo "Oled liiga noor, et autot juhtida";
    } else {
        echo "Oled piisavalt vana, et autot juhtida";
    }
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
