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
            <h1><?php  echo "PHP array"; ?></h1>

    </div>
            <?php
                $masyvas = array( "Tomas", "Tomulis", 1965 );
                $name = $masyvas[0];
                $lname = $masyvas[1];
                $age = $masyvas[2];

    // 1 sukurit masyva
    // isvesti i ekrana varda, pavarde, gimimo  data
    echo "vardas $name ir pavarde $lname yra atsirade $age metais <br>";
    // 2
    // isvesti i ekrana vardas (h2), pavarde (h3) gimimo data (bold)
    echo "vardas <h2>$name</h2>
         ir pavarde <h3>$lname</h3>
         yra atsirade <b>$age</b> metais <br>";
    echo " <h2>$name</h2>";
    echo " <h3>$lname</h3>";
    echo " <b>$age</b>";
    // 3
    // printf naudojant isvesti sakinyje: varda , pavarde, data
    // vietoj %s atsiras kintamieji, kurie isvardinti po sakinio
        printf( "%s keliavo per 9 juras %.2f metais ir sutiko %s piktaji <br>", $name, $age, $lname );

    // 4
    // jeigu data daugiau nei 1970, isspausdinti varda, priesingu atveju - pavarde
    // (salyga) ? ... : ....;
    if ($age > 1970) :
        echo $name . "<br>";
    else:
        echo $lname . "<br>";
    endif;
    //    (salyga)      ? if true : if false;
    $x  = ($age > 1970) ? $name : "$lname";
    echo $x . "<br />";


    // var x = $age || $name || "nerasta";


    $masyvas2 = array('vardas' => "tomas", "pavarde" => "tomulis", "amzius" => 1961 );
    echo "vardas:" . $masyvas2['vardas'] . "<br />";
    $masyvas2['vardas'] = "jonas";
    echo "vardas:" . $masyvas2['vardas'] . "<br />";
    // didiname pirma raide
    $vardas = $masyvas2['vardas'] ;
     $vardas = ucFirst($vardas); // return " string"
     echo "vardas:" . $vardas . "<br />";

     $txt = "Lape snape ejo per lietu ";
     echo strtolower($txt) . "<br />";
     echo strtoupper($txt) . "<br />";

     $masyvas2[2 ] = 1500;
     echo "00000:" . $masyvas2["amzius" ];


     print_r($masyvas2);
     echo "<br /><br /><br />";


     foreach ($masyvas2 as  $elementas) {
         echo "reiksme: $elementas <br>";
     }
     echo "<br /><br /><br />";
     foreach ($masyvas2 as $stalciausName => $stalciausReiksme) {
         if($stalciausName === "pavarde" || $stalciausName == "amzius") {
             continue;
         }
         echo $stalciausName . " : ". $stalciausReiksme ."<br>";
     }
     // foreach ($variables as $key => $value) {
     //     # code...
     // }



     ?>






        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
