<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css?ver=1.0.0">

    </head>
    <body  >

        <div class="container bg-info">

            <h1><?php echo"isijunk konsole"; ?></h1>
        </div>
          <?php

          // uzduotis 1

          // A. susikurti meniu masyva: home, about galerija, contact, blog
            $menu = array('home', 'about', 'galerija', 'contact', 'blog');

          // B. atspausdinti visus meniu punktus i HTML
            echo "<nav><ul>";
            foreach($menu as $elementas){
              echo "<li><h3>$elementas</h3></li>" . "<br />";
            }

            echo "</ul></nav>";


          // uzduotis 2
          // A. susirasti 6 nuotraukas
          // B. susikurti nuotrauku pavadinimu masyva
            $nuotraukos = array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg");

          // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute


            // foreach($nuotraukos as $nuotrauka){
            //   echo "<img src='./pics/$nuotrauka' style='width:200px; height:200px' />";
            //   if($nuotrauka == "3.jpg"){
            //     echo "<br />";
            //   }
            //   echo "</div>";
            // }
            //ARBA

          ?> <div class='container-fluid'><div class='row'><?php

            foreach($nuotraukos as $nuotrauka){
            echo "<div class='col-6'>
                    <img src='./pics/$nuotrauka' class='w-50 img-fluid' />
                  </div>";
          }

          echo "</div></div>";



            echo "<br /><br />";

          // uzduotis 3
          // sukurti matrica kurioje bus saugoma kiekvieno prekes info: Antraste, img pavadinimas, prekes aprasymas, kaina
          // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina

            $visosPrekes = array();
            $preke0 = array('name' => 'Grazios kelnes', 'img' =>  '1.jpg', 'aprasymas' =>  'grazios ir fainos kelnes', 'kaina' => 10.99);
            $preke1 = array('name' => 'Megztinis', 'img' =>  '2.jpg', 'aprasymas' =>  'grazus ir fainas megztinis', 'kaina' =>  50);
            $preke2 = array('name' => 'Maike', 'img' =>  '3.jpg', 'aprasymas' =>  'grazi ir faina maike', 'kaina' =>  11.50);
            $preke3 = array('name' => 'Batai', 'img' =>  '4.jpg', 'aprasymas' =>  'grazus ir faini batai', 'kaina' =>  5.20);

            // echo $preke1[2];

          // B. i masyva visosPrekes, ideti "preke" masyva
            $visosPrekes[0] = $preke0;
            $visosPrekes[1] = $preke1;
            $visosPrekes[2] = $preke2;
            $visosPrekes[3] = $preke3;





            for($i = 0; $i < count($visosPrekes); $i++){
              ?>
              <div class="col">
                <div class="row">
                  <img src="./pics/<?php echo $visosPrekes[$i]['img']; ?>" width="200px" height="200px" />
                  <h2><?php echo $visosPrekes[$i]["name"]; ?></h2>
                  <p><?php echo $visosPrekes[$i]["aprasymas"]; ?></p>
                </div>
              </div>
              <?php
            }


          // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)


          //A
          $naujasMasyvas = array(
            array('produktas' => 'pienas', 'kiekis' => 1, 'kaina'=> '16' ),
            array('produktas' => 'bananai', 'kiekis' => 3, 'kaina'=> '10' ),
            array('produktas' => 'duona', 'kiekis' => 5, 'kaina'=> '7' ));


          print_r($naujasMasyvas);

          echo "<br /> <br />";

          for($i = 0; $i < 2; $i++){
          echo "pirkiniu sarase yra: " . $naujasMasyvas['pienas'][$i];


        }








           ?>


        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
