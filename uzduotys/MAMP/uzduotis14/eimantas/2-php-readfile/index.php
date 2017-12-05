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
    <body>

        <div class="container bg-info">
            <h1>Isijunk konsole</h1>

        </div>

        <?php

            $prekesMasyvas = array();
            $i = 0;

            $prekiuFile = fopen("./prekes.txt", "r") or die ("Nerado failos");

            while (!feof($prekiuFile)) {
                $eilute = fgets($prekiuFile); // paima eilute is txt failo
                if($eilute !=""){ // tikrina ar eilute tuscia
                    // echo $eilute . "apacioj bus isvesta masyve <br />"; // isspausdina eilute
                    $temp = explode(" : ", $eilute); // suskaldo eilute i masyva; skiria su ":"

                    $prekesMasyvas[$i] = array();   // sukuria matrica i-tame stalciuje
                    $prekesMasyvas[$i]["name"] = $temp[0];  // saugo varda matricoje
                    $prekesMasyvas[$i]["number"] = $temp[1];
                    $prekesMasyvas[$i]["price"] = $temp[2];

                    $i++;
                }
            }
            print_r($prekesMasyvas);
            fclose($prekiuFile); // istrina is serverio ramu

         ?>




        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
