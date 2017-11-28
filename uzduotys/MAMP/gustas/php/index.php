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

        <div class="container bg-success">
            <h1>php praktika</h1>

        </div>





        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>



<?php
//komentaras
/* kitoks komentaras
kuri galima rasyti per kelias
eilutes*/



echo "siandien mokomes php </br>";
$name = "Tomas";
$age = 21.00000;
  echo "realus age: $age <br />";
  // gettype($age);
  settype($age, 'integer');


// + nejungia string , bet . nejungia
echo "labas $name </br>";
echo "labas ".$name."</br>";

define("DB_NAME", "ryklys");
define("DB_PASSWORD", "kazinkas");
define("HOST", "localhost");
define("USERNAME", "root");

echo "duomenu bazes pavadinimas " . DB_NAME."</br>";




















//
