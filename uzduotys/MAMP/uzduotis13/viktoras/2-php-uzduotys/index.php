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
            // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
            $prekes = array();
            $preke1 = array("name" => "vilnones kelnes","img" => "1.jpg","content" => "aprasymas","price" => 0.29);
            $preke2 = array("name" => "neilonines kojines","img" => "2.jpg","content" => "aprasymas text","price" => 0.19);
            $preke3 = array("name" => "medvilnines kepures","img" => "3.jpg","content" => "aprasymas","price" =>  0.099);

            $prekes[0] = $preke1;
            $prekes[1] = $preke2;
            $prekes[2] = $preke3;

            for ($i=0; $i < count($prekes); $i++) {?>
            <img src="./images/<?php echo $prekes[$i]["img"];?>" height="100px" width="100px">
            <h2><?php echo $prekes[$i]["name"];?></h2>
            <p><?php echo $prekes[$i]["content"]; ?></p>
            <button class='btn btn-lf btn-info'><?php echo $prekes[$i]["price"]?></button>

    <?php }        ?>









<?php


            // B. i masyva visosPrekes, ideti "preke" masyva
            // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
            ?>


        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./main.js">

        </script>
    </body>
</html>
