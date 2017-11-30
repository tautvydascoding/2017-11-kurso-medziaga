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
          <h1> <?php echo "PHP uzduotis" ?> </h1>

          <?php
          // uzduotis 1

          // A. susikurti meniu masyva
          $meniu = array("Home", "About", "Contacts", "Gallery");
          // B. atspausdinti visus meniu punktus i HTML
          ?>
          <ul>
          <?php
          foreach ($meniu as $link) {
          ?>
            <li><?php echo $link ?></li>
          <?php
          }
          ?>
          </ul>
          <?php
          // uzduotis 2
          // A. susirasti 6 nuotraukas
          // B. susikurti nuotrauku pavadinimu masyva
          $nuotraukos = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg");
          // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
          ?>
          <div class="row">
            <?php
            foreach ($nuotraukos as $nuotrauka) {
              if($nuotrauka == 4):
                ?> </div> <div class="row"> <?php
              endif;
              ?>
              <div class="col-md-4">
                <img src="./images/<?php echo $nuotrauka ?>" width="200px" height="auto" alt="">
              </div>
            <?php

            }
             ?>
          </div>

          <?php
          // uzduotis 3
          // sukurti matrica kurioje bus saugoma kiekvieno prekes info: Antraste, img pavadinimas, prekes aprasymas, kaina
            $visosPrekes = array();

          // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
            $preke1 = array("Vilnones kelnes", "1.jpg", "Aprasymas text text text", 0.99);
            $preke2 = array("Dzinsai", "2.jpg", "Aprasymas text text text", 2.99);
            $preke3 = array("Kepure", "3.jpg", "Aprasymas text text text", 1.99);

            $visosPrekes[0] = $preke1;
            $visosPrekes[1] = $preke2;
            $visosPrekes[2] = $preke3;

          // B. i masyva visosPrekes, ideti "preke" masyva
          echo '<div class="row">';

          for ($i=0; $i < count($visosPrekes); $i++) { ?>
            <div class="col">
              <img class="img-fluid" src="./images/<?php echo $visosPrekes[$i][1]; ?>" alt="" width="200px" height="200px">
              <h2><?php echo $visosPrekes[$i][0]; ?></h2>
              <p><?php echo $visosPrekes[$i][2]; ?></p>
              <button type="button" class="btn btn-danger btn-lg" name="button"> <?php echo $visosPrekes[$i][3]; ?> </button>
            </div>
            <?
          }
          echo "</div>";


          // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)

          //

          ?>
        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
