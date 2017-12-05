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
            <h1><?php echo "php masyvai"; ?></h1>


            <?php
                $masyvas = array( "Tomas", "Tomulis", 1965 );
                $lname = $masyvas[1];
                $name = $masyvas[0];
                $age = $masyvas[2];

                // 1sukurti masyva
                // isvesti i ekrana varda, pavarde , gimimo data

                // $zmogus = array("Edgaras", "Petrauskas", 2001);
                // $vardas = $zmogus[0];
                // $pavarde = $zmogus[1];
                // $gData = $zmogus[2];
                //
                // echo $vardas;
                // echo $pavarde;
                // echo "$gData <br>";


                //2
                // isvesti i ekrana vardas (h2), pavarde (h3) gimimo data (bold)
                //
                // echo "vardas: <h2>$vardas</h2>";
                // echo "pavarde: <h3>$pavarde</h3>";
                // echo "gimimo data: <b>$gData</b>";
                //
                //
                // //3
                // // printF naudojant isvesti sakinyje: varda, pavarde, data
                //
                // printf ("%s keliavo per 9 juras %.2f metais ir sutiko %s piktaji", $vardas, $pavarde, $gData, "<br>");
                //
                //
                // //4
                // //jeigu data daugiau nei 1970, isspaudinti varda, priesingu atveju, pavarde
                // //(salyga) ? ....;...;
                //
                // if ($gData > 1970) :
                //     echo $vardas . "<br>";
                // else:
                //     echo $pavarde . "<br>";
                //
                // endif;
                // //
                //
                // $x = ($age > 1970) ? $vardas : $pavarde;
                // echo $x. "<br>"




            $masyvas2 = array('vardas' => "tomas", "pavarde" => "tomulis", "amzius" => 1961);
            echo "vardas" . $masyvas2['vardas'] . "<br />";
            $masyvas2['vardas'] = "jonas";

        $vardas = $masyvas2['vardas'];
        $vardas = ucFirst('vardas');
        echo "vardas" . $vardas . "<br />";


        $txt = "lape snpae ";
        echo strtolower($txt) . "<br />";
        echo strtoupper($txt) . "<br />";

$masyvas2['amzius'] = 1500;





foreach ($masyvas2 as $stalciausName => $stalciausReiksme) {
    echo $stalciausName . " . ". $stalciausReiksme ."<br>";
}

foreach ($masyvas2 as $stalciausName => $stalciausReiksme) {
    echo $stalciausName . " . ". $stalciausReiksme ."<br>";
            ?>



        </div>





        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
