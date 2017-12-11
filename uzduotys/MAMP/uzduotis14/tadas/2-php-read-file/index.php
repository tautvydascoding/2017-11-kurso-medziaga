<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Php basics</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css?ver=1.0.0">

    </head>
    <body>

        <div class="container bg-info">
          <h1> <?php echo "PHP-file read" ?> </h1>
        </div>

        <div class="container">
          <div class="row">


        <?php
        $visosPrekes = array();
        $i = 0;
        $prekesFile = fopen("./prekes.txt", "r") or die("Nepavyko rasti \"prekes.txt\" failo!");

        while (!feof($prekesFile)) {
          $eilute = fgets($prekesFile);
          $tempArray = explode(" : ", $eilute);
          // print_r($tempArray);

          $visosPrekes[$i] = $tempArray;
          $i++;
        }
        // print_r($visosPrekes);

        foreach ($visosPrekes as $preke) {
          $pavadinimas = $preke[0];
          $kiekis = $preke[1];
          $kaina = $preke[2];
          ?>
          <div class="col-3 mx-auto">
            <h2><?php echo $pavadinimas ?></h2>
            <h3><?php echo "Siuo metu turime: " . $kiekis ?></h3>
            <button class="btn btn-primary" type="button" name="button"><?php echo $kaina ?></button>
          </div>
        <?php
        }

        fclose($prekesFile);


        ?>

      </div>
    </div>
        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
