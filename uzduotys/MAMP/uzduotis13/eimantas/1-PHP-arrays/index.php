<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>...</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css?ver=1.0.0">

    </head>
    <body>

        <div class="container bg-success">
            <h1><?php echo "PHP Array"  ?></h1>
        </div>

        <?php
            $masyvas = array("Tomas", "Tomulis", 1996);

            $name = $masyvas[0];
            $lName = $masyvas[1];
            $age = $masyvas[2];

            // 1 isvesti visa info
            echo "$name $lName $age <br />";

            // 2 isvesti skirtinguose tagose h2 h3 ir bold
            echo "<h2>$name</h2> <h3>$lName</h3> <strong>$age</strong><br />";

            // 3 printf naudojat svesti sakinyje: varda, pavarde, amziu

            printf("Isvedu info print f budu. Vardas: %s Pavarde: %s amzius: %s <br />", $name, $lName, $age);

            // 4 jeigu data daugiau nei 1970, isspaisdinti varda, priesingu atveju - Pavarde

            if($age > 1970){
                echo "Amzius daugiau nei 1970: $name <br />";
            }else{
                echo "Amzius maziau nei 1970: $lName <br />";
            };

            // kitas variantas
            // tikrina amziu, jei true - spausdina varda, jei ne pavarde
            $x = ($age > 1970) ? $name : $lName;
            echo $x . "<br />";

            // ieskos amziaus jei neranda tada vardo, jei nera ir to, spausdina "nerasta"
            // var y = $age || $name || "nerasta";


            // asociatyus masyvas

            $infoMas = array('vardas' => "tomas", "pavarde" => "tomauskas", "amzius" => 1961 );
            echo "<hr />";
            echo "vardas: " . $infoMas['vardas'] . "<br />";
            $infoMas['vardas'] = "jonas";
            echo "vardas: " . $infoMas['vardas'] . "<br />";

            // didiname pirma raide
            $vardas = $infoMas['vardas'];
            $vardas = ucFirst($vardas); // return string
            echo "vardas: " . $vardas . "<br />";

            $txt = "cia yra daug betkokio texto tam kad butu galima testuoti";

            echo strtoupper($txt) . " --padidinta <br />";
            echo strtolower($txt) . " --sumazinta <br />";

            $infoMas["amzius"] = 1500;
            echo $infoMas["amzius"];

            echo "<hr />";

            // default struktura
            // variable = masyvas, key = stalciaus pavadinimas, value = stalciaus data
            foreach ($infoMas as $masyvoIndexas => $elementas) {
                echo "reiksme: $elementas : $masyvoIndexas <br />";
                if($masyvoIndexas === "pavarde"){
                    echo $masyvoIndexas . " !! sustojo ciklas";
                    break;
                }elseif ($masyvoIndexas === "amzius"){
                    echo "prasoko nes rado amziaus stalciu";
                    continue;
                }
            }

            echo "<br />";
            echo "<hr />";

            $taipArbaNeMAS = array("taip", "ne", "taip", "ne", "taip", "ne", "taip", "ne");

            for ($i=0; $i < count($taipArbaNeMAS); $i++) {
                echo ("masyvo ilgis: " . ($i + 1) . "<br />");
            }



         ?>





        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
