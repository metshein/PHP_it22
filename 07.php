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
        <!-- Tervitus
        koosta funktsioon, mis tervitab. Näiteks: “Tere päiksekesekene!”
    Liitu uudiskirjaga
        koosta funktsioon, mis genereerib Bootstrapi uudiskirjaga liitumise vormi (vorm ja nupp)
    Kasutajanimi ja email
        loo funktsioon, mis muudab kasutajanime väikesteks tähtedeks
        täienda funktsiooni, et kasutajanimele luuakse “@hkhk.edu.ee” lõpuga email
        täienda funktsiooni nii, et kasutajale luuakse 7-kohaline kood
            täienda koodi nii, et luuakse tähed ja numbrid läbisegamini
    Arvud
        koosta funktsioon, mis lubab kasutajal valida arvude vahemikku. Näiteks 2 ja 8, tekitavad 2, 3, 4, 5, 6, 7, 8
        täienda funktsiooni nii, et saab muuta genereeritud arvude sammupikkuse. Näiteks 2 kuni 8 ja samm 3, tekitavad 2, 5, 8
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



        tervitus();

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
