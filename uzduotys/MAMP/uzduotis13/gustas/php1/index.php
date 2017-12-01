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

            <h1><?php echo"isijunk konsole"; ?>
            </h1>
        </div>
            <?php
              $masyvas = array("Tomas", "Tomulis", 1965);
              $name = $masyvas[0];
              $lname = $masyvas[1];
              $age = $masyvas[2];

              //1 UZDUOTIS  isvesti i ekrana varda, pavarde gimimo data
              echo "vardas $name<br />pavarde $lname<br />gimimo data $age"

              //2 UZDUOTISisvesti i ekrana vardas h2, pavarde h3 gimimo data bold
              ?><h1>vardas <?php echo $name ?></h1><br /><h2>Pavarde <?php echo $lname ?></h2><br /><h3>gimimo data <?php echo $age ?></h3>

              <!-- printf naudojant isvesti sakinyje varda, pavarde, data -->
              <?php
              printf("Vardas %s Pavarde %s gimimo metai %u",$name,$lname,$age);
              //==========  %s numato kad kintamasis yra string,
              //==========  %.2f  = 2 skaiciai po kablelio
              printf(" <br />%s keliavo per 9 juras %s metais ir sutikos %s piktaji <br />",$name,$age,$lname);//


              //3 UZDUOTIS
              //JEIGU DAUGIAU NEI 1970, ISPAUSDINTI VARDA, PRIESINGU ATVEJU - PAVARDE
              if($age >1970):
                echo "Vardas $name<br />";
              else:
                echo "Pavarde $lname <br />";
              endif;

              //    (aprasoma salyga) ?  if true : if false
              $x = ($age > 1970) ? $name : $lname;
              echo $x . "<br />";



              $masyvas2 = array('vardas' => " darius", 'pavarde' => "dariauskas", 'amzius' => 1961 );
              echo "vardas" . $masyvas2['vardas'] . "<br />";
              $masyvas2 ['vardas'] = 'jonas';
              echo "vardas " . $masyvas2['vardas'] . "<br />";

              $vardas = $masyvas2['vardas'];
              $vardas = ucfirst($vardas);
              echo "vardas " . $vardas . "<br /><br />";


              $txt = "They're not infinite universes left in sync with the show. What is this, 90's Conan? ricks";
              echo strtolower ($txt) . "<br />";
              echo strtoupper($txt) . "<br />";

              print_r($masyvas2);
              echo "<br /><br /><br />";

              foreach ($masyvas2 as $elementas) {
                echo "reiksme: $elementas <br />";
              }

              echo "<br /><br /><br />";


              foreach ($masyvas2 as $stalciausVardas => $elementas) {
                echo $stalciausVardas . " : " . $elementas . "<br />";
                if ($stalciausVardas == "pavarde") {
                  break;
                }
              }

              foreach ($masyvas2 as $stalciausVardas => $elementas) {
                if ($stalciausVardas == "pavarde") {
                  continue;
                }
                echo $stalciausVardas . " : " . $elementas . "<br />";
              }




               ?>


        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
