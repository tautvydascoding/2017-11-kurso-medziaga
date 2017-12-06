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
            include_once('./doctors-db.php');
        ?>

        <?php
        $doctor = getDoctor($connection, 6);
        echo "<h1>Pirma uzduotis: </h1>"."<br />";
        echo "<h2>".$doctor['id']." ".$doctor['name']." ".$doctor['lname']."</h2>"."<br />";
        echo "<br />";
        echo "<br />";
        echo "<br />";

// antra uzduotis: atspausdinti daktara i <p></p>, kurio id yra 7;

        $doctor = getDoctor($connection, 7);
        echo "<h1>Antra uzduotis: </h1>"."<br />";
        echo "<p>".$doctor['name']." ".$doctor['lname']."</p>"."<br />";

// trecia uzduotis : atspausti visus daktarus i ul li, kaip list item;
        ?>
        <?php
        echo "<h1>Trecia uzduotis: </h1>"."<br />";
        $doctors = getDoctors($connection);?>
        <ul>
        <?php foreach ($doctors as $duo) {
            echo "<li>".$duo['name']." ".$duo['lname']."</li>";
        }


         ?>
        </ul>


<?php
// ketvirta uzduotis: patobulinti 3 uzduoti, kad paspaudus ant daktaro atidarytu doctors.php

echo "<h1>Ketvirta uzduotis: </h1>"."<br />";
$doctors = getDoctors($connection);?>
<ul>
<?php foreach ($doctors as $duo) {
    echo "<li>"."<a href='./doctor.php?numeris=".$duo['id']."'>".$duo['name']." ".$duo['lname']."</a>"."</li>";
}


 ?>
</ul>






        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
