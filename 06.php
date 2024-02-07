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
    <h1>Genereeri</h1>  
<?php
for ($i=1; $i < 101; $i++) { 
    echo "$i. ";
    if($i%10==0){
        echo "<br>";
    }
}
?>
<h2>Read</h2>
<?php
for ($i=0; $i < 10; $i++) { 
    echo "* ";
}

for ($i=0; $i < 10; $i++) { 
    echo "* <br>";
}

for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        echo "* ";
    }
    echo "<br>";
}
?>

<h2>Kahanev ja kolmega jagunevad</h2>
<?php
for ($i=10; $i > 0; $i--) { 
    echo "$i ";
}

echo "<br>";
for ($i=1; $i < 100; $i++) { 
   if($i%3==0){
       echo "$i ";
   }
}

?>

<h1>Poisid ja tüdrukud</h1>
<?php
$poisid = array("Juku","Kalle","Mati","Toomas","Jaanus","Karl","Martin","Joosep","Jüri","Jürgen");
$tydrukud = array("Kati","Mari","Eve","Kadri","Evelin","Kadri","Kadri","Kadri","Kadri","Kadri");

for ($i=0; $i < count($poisid); $i++) { 
    echo "$poisid[$i] - $tydrukud[$i]<br>";
}

?>


<h1>Kordusi pole</h1>

<?php
    $poisid2 = array();

    for ($i=0; $i < count($poisid); $i++) { 
        if (in_array($poisid[$i], $poisid2)) { 
            echo "found"; 
        } else { 
            echo "not found"; 
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
