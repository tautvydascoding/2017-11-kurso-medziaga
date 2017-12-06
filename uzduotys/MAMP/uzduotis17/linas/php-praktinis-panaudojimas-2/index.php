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
        <?php
        include_once('./doctors_db.php');
        ?>

        <div class="container bg-info">
            <h1>Isijunk konsole</h1>




            <!--  issivesti viena daktara, kurio id yra 6-->
            <?php

            $doctor = getDoctor( $connection, 6);
            echo "<h2>" . $doctor['name'] . ' ' . $doctor['lname'] . "</h2>";


            $doctor = getDoctor( $connection, 5);
            echo "<p>" . $doctor['name'] . ' ' . $doctor['lname'] . "</p>";


            $visi_gydytojai = getDoctors($connection);
            echo "<ul>";
            foreach ($visi_gydytojai as $gydytojas) {
                echo "<li>".$gydytojas['name'] . " " . $gydytojas['lname'] . '</li>';
            }
             echo "</ul>";

             //3

             foreach ($visi_gydytojai as $gydytojas) {
                 echo "<li><a href ='./doctor.php?numeris=" . $gydytojas['id'] . "'> " . $gydytojas['name'] .   '</a></li>';
             }


            ?>





        </div>





        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
