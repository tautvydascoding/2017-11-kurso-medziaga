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
            <h1>Isijunk konsole</h1>

        </div>
<?php

// uzduotis 1
// A. susikurti meniu masyva: home, about, gallery, contact, blog
    $menu = array( "home", "about", "gallery", "contact", "blog"  );
// B. atspausdinti visus meniu punktus i HTML (su html tag'ais)
    echo "<nav> <ul>";
        foreach ($menu as $menuItem) {
            echo "<li class='nav-item'> $menuItem </li>";
        }
    echo "</ul></nav>";

// uzduotis 2
// A. susirasti 6 nuotraukas
// B. susikurti nuotrauku pavadinimu masyva
$images = array('1.jpg','2.jpg','3.png','4.png','5.jpg','6.jpg');
// C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
   // <img src="./img/1.jpg" alt=''  />
   foreach ($images as $image) {
       echo "<div class='col-3'>" ;
       echo "<img class='img-fluid' src='./img/" . $image . "' alt='foto' />   ";
       echo " </div>";
   }
?>
   <div class="container bg-info">
        <div class="row">
            <?php foreach ($images as $image) : ?>
                    <div class='col-4'>
                       <img class='img-fluid' src='./img/<?php echo $image; ?>' alt='foto' />
                     </div>
               <?php endforeach; ?>
        </div>
    </div>

   <?
// uzduotis 3
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
//  Antraste, img pavadinimas, prekes aprasymas, kaina
// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)


 //A
     $prekes = array();
     $preke1 = array("name" => "Vilnones kelnes", "img" => "1.jpg", "content" => "Aprasymas text text", "price" => 0.99 );
     $preke2 = array("name" => "Neilonines kelnes", "img" =>  "2sss.jpg", "content" => "Aprasymas text text", "price" =>  10.55 );
     $preke3 = array("name" => "Medvilnines kelnes", "img" =>  "4.png", "content" =>  "Aprasymas text text", "price" =>  1.50 );

     $prekes[0] = $preke1;
     $prekes[1] = $preke2;
     $prekes[2] = $preke3;


     for ($i=0; $i < count($prekes); $i++) {
         ?>
         <div class="col">
             <img class="img-fluid" src='./img/<?php  echo $prekes[$i]["img"];  ?>' width="200px" height="200px;" >
             <h2> <?php  echo $prekes[$i]["name"];  ?></h2>
             <p> <?php   echo $prekes[$i]["content"];  ?></p>
             <button class='btn btn-lg btn-info'> <?php echo $prekes[$i]["price"];  ?>  </button>
         </div>

 <?php  } ?>




        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
