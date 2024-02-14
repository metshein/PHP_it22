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
    <h1>Harjutus 13</h1>
    <?php
      // Koosta programm, mis lubab üles laadida ainult JPG ja JPEG faile
      // Täienda sama programmi nii, et ma näeksin üleslaetud pildifaile ning neile klikkides kuvatakse pildid täies oma hiilguses :)
      $kataloog = 'pildifailid';


      if(!empty($_FILES['minu_fail']['name'])){
        $sinu_faili_nimi = $_FILES['minu_fail']['name'];
        $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
        
        $faili_tyyp = $_FILES['minu_fail']['type'];		//faili MIME tüüp
        
        if($faili_tyyp=='image/jpeg' || $faili_tyyp=='image/jpg'){
          if(move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
            echo 'Faili üleslaadimine oli edukas';	
            header('Location: 13.php');
          } else {
            echo 'Faili üleslaadimine ebaõnnestus';
          }
        } else {
          echo 'Faili ei leitud üles!';	
        }
      }

      $asukoht=opendir($kataloog);
      while($rida = readdir($asukoht)){
         if($rida!='.' && $rida!='..'){
          echo "<a target='_blank' href='$kataloog/$rida'><img src='$kataloog/$rida' alt='pilt' height='100'></a>";
        }
      }


?>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="file" name="minu_fail"><br>
      <input type="submit" value="Lae üles!">
    </form>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>