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
          <h1> <?php echo "PHP masyvai" ?> </h1>

          <?php
            $masyvas = array('Petras', 'Petrulis', 1965);
            $lname = $masyvas[1];
            $name = $masyvas[0];
            $age = $masyvas[2];

            // Isvedam Petro informacija
            echo "$name $lname, $age";

            // 2. Isvesti informacija skirtinguose HTML taguose
            //vardas h2, pavarde h3, gimimo data bold
            // $tempStr = "<h2>Vardas: $name</h2><br /><h3>Pavarde: $lname</h3><br /><b>Data: $age</b>"
            ?>

              <h2>Vardas <?php echo $name ?></h2>
              <h3>Pavarde <?php echo $lname ?></h3>
              <b>Data <?php echo $age ?></b>

            <?php
            // 3. printf naudojant isvesti sakinyje: varda, pavarde, gimimo data
            printf("Zmogus kurio vardas %s, o pavarde %s, yra gimes %d metais <br />", $name, $lname, $age);

            // 4. IF data daugiau nei 1970, isspausdinti varda, priesingu atveju - pavarde
            if($age > 1970):
              printf("[Amzius didesnis nei 1970] vardas: %s <br />", $name);

            else:
              printf("[Amzius mazesnis nei 1970] pavarde: %s <br />", $lname);

            endif;
            //TRUMPESNIS BUDAS: $x = ($age > 1970) ? $name : $lname;
          ?>

        </div>


        <?php
        //Asociatyvus masymas
        $asoc_masyvas = array('vardas' => 'tadas', 'pavarde' => 'vosylius', 'data' => '1996');
        printf ("Vardas %s <br />", $asoc_masyvas['vardas']);

        $vardas = ucfirst($asoc_masyvas['vardas']);
        // $vardas = ucfirst($vardas);

        echo "Pirmoji vardo raide uppercase: $vardas <br />";

        $tempStr = "Lape snape ejo per lietu";
        echo strtolower($tempStr) . "<br />";
        echo strtoupper($tempStr) . "<br />";


        //FOREACH
        foreach ($asoc_masyvas as $stalciausName => $elementas) {
          echo "$stalciausName: $elementas <br />";
          if ($stalciausName === "pavarde") {
            break;
          }
        }


        ?>
        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
