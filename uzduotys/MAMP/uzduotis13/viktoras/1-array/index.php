<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body  >


        <div class="container bg-success">
                <h1><?php echo "PHP array" ?></h1>

        </div>

            <?php
                $masyvas = array("Tomas", "Tomulis", 1965);
                $name = $masyvas[0];
                $lname = $masyvas[1];
                $age = $masyvas[2];

                //isvesti informacija;

                echo "vardas: ".$name. "</br>";
                echo "pavarde: ".$lname. "</br>";
                echo "amzius: ".$age. "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";
                echo "</br>";
                //isvesti informacija skirtinguose taguose;

                ?><h2><?php echo "vardas: ".$name. "</br>";?></h2><?php

                ?><h3><?php echo "pavarde: ".$lname. "</br>";?></h3><?php

                ?><b><?php echo "amzius: ".$age. "</br>";?></b><?php


                echo "vardas <h2>$name</h2>, pavarde <h3>$lname</h3>, amzius <b>$age</b>";
                echo "</br>";


                //printf naudojant isvesti sakinyje: varda, pavarde, data

                printf("$name keliavo $age ir patapo $lname");

                echo "</br>";



                //galima ir kitaip su printf
                printf("%s keliavo %s ir patapo %s", $name, $age, $lname);

                //jeigu data didesne nei 1970, isspausdinti varda, prisingu atveju - pavarde;
                echo "</br>";


                if ($age>1970):
                    echo $name."<br />";
                else:
                    echo $lname."<br />";
                endif;

                //   (salyga) ? if true : if false
                echo "</br>";


                $x = ($age>1970) ? $name : $lname;

                echo $x."<br />";

                //asociatyvus masyvas

                $masyvas2 = array('vardas'=>'tomas', 'pavarde'=>'Tomauskas', 'amzius' => 1988 );

                echo "vardas " . $masyvas2['vardas'] ."<br />";
                $masyvas2['vardas'] = "jonas";
                echo "vardas " . $masyvas2['vardas'] ."<br />";

                $vardas = $masyvas2['vardas'];
                echo ucFirst($vardas)."<br />";
                echo $vardas."<br />";
                $vardas = ucFirst($vardas);
                echo $vardas."<br />";

                $txt = "Valgyt daug saldainiu negalima";
                echo strtolower($txt)."<br />";
                echo strtoupper($txt)."<br />";

                //isvesti visa masyva;
                print_r ($masyvas2);
                echo "<br />";

                //foreach

                foreach ($masyvas2 as $elementas) {
                    echo "reiksme: $elementas"."<br />";
                }

                foreach ($masyvas2 as $stalcius => $elementas) {
                    echo "stalcius: $stalcius"."<br />"."stalciaus elementas: $elementas"."<br />";
                }


                 ?>










        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./main.js">

        </script>
    </body>
</html>
