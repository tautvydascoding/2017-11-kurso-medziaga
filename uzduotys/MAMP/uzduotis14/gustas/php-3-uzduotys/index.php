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
        $prekesArray = array();
        $i = 0;

        $prekesFile = fopen('./file.txt', 'r') or die("failo tokio pavadinimu nera");
          while (!feof($prekesFile)) {
            // echo "dar neradau failo pabaigos";
            $eilute = fgets ($prekesFile);
            if ($eilute != "") {
              // echo $eilute .  "<br />";
              $temp = explode(" : ", $eilute); // array( [0] => kazkas "venis" [1] => 1vnt [2] => 10.00eur )
                if(count($temp ) == 3){

              // print_r($temp);
              // echo "<br />";
              // $prekesArray[0] =  $temp[0];
              echo $i . "<br />";
              $prekesArray[$i] = array();
              $prekesArray[$i]['name'] =  $temp[0];
              $prekesArray[$i]['number'] =  $temp[1];
              $prekesArray[$i]['price'] =  $temp[2];
              $i++;
              // break;
            }else {
              echo "sekretore, papildykite prekiu failo " . ($i+1) . " eiluteje truksta: " . (2 - (count($temp) - 1)) ." ':' " . "<br /><br />";
            }
            }
          }

          print_r($prekesArray);
        //.
          fclose($prekesFile); // istrina is RAM




         ?>





        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
