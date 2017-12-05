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


        <?php
            $prekesArray = array(); //sukurem tuscia masyva
            $i = 0;
            $prekesFile = fopen ('./prekes.txt', 'r') or die('nera tokio failo');
            while(!feof($prekesFile)){
                // echo "neradau failo pabaigos"."<br />";
                $eilute = fgets($prekesFile);
                if ($eilute != "") {

                    // echo $eilute."<br />";
                    $temp = explode(" : ", $eilute); //jau grizta masyvas, taciau ciklas vyks 3 kartus todel temp kiekviena kart overwritinsis

                    if (count($temp == 3)) {
                        $prekesArray[$i] = array(); // sukurem [$i] tame elemente dar viena masyve, todel buves masyvas patapmpa matrica                        $prekesArray[$i]["name"] = $temp[0];
                        $prekesArray[$i]["name"] = $temp[0];
                        $prekesArray[$i]["number"] = $temp[1];
                        $prekesArray[$i]["price"] = $temp[2];
                        $i++;
                    } else {
                        echo "sekretore, papildykite $i eilute";
                    }
                }



            }

print_r($prekesArray);
            fclose($prekesFile);
         ?>

        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./main.js">

        </script>
    </body>
</html>
