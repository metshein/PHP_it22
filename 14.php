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
    <h1>Harjutus 14</h1>
    <?php
      $kataloog = 'pildifailid';

      function get_rand_img($dir){
            $arr = array();
            $list = scandir($dir);
            foreach($list as $file){
                if($file != '.' && $file != '..'){
                    $ext = end(explode('.', $file));
                    if($ext == 'gif' || $ext == 'jpeg' || $ext == 'jpg' || $ext == 'png' || $ext == 'GIF' || $ext == 'JPEG' || $ext == 'JPG' || $ext == 'PNG'){
                        array_push($arr, $file);
                    }
                }
            }
            return $arr;


            //$img = $arr[array_rand($arr)];
            // if($img != ''){
            //     $img = array_rand($arr);
            //     $img = $arr[$img];
            // }
            // $img = str_replace("'", "\'", $img);
            // $img = str_replace(" ", "%20", $img);
            // return $img;
        }
echo get_rand_img('pildifailid');


      // while($rida = readdir($asukoht)){
      //   if($rida!='.' && $rida!='..'){
      //     echo "<a target='_blank' href='$kataloog/$rida'><img src='$kataloog/$rida' alt='pilt' height='100'></a>";
      //   }
      // }


?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>