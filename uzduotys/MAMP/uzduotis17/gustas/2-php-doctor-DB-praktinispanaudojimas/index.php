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
        <?php include_once('./doctorDB.php');?>

<!-- issivesti 1 daktara kurio id 6 ----------------------------------------------------------------------------->
<?php
    $paimamDaktara = getDoctor($connection, 6);
    // print_r($paimamDaktara);
    echo "<h2>" . $paimamDaktara['name'] . ' ' . $paimamDaktara['lname'] . "</h2>";
    ?>

<!-- baigiasi uzduotis ---------------------------------------------------------------------------------------------->

<!-- uzduotis 2 atspausdinti datara i <p/>, kurio id=7  -->
<?php
    $paimamDaktara = getDoctor($connection, 7);
    // print_r($paimamDaktara);
    echo "<p>" . $paimamDaktara['name'] . ' ' . $paimamDaktara['lname'] . "</p>";
    ?>

<!-- baigiasi tekstas ---------------------------------------------------------------------------------------------->

<!-- uzduotis 3 visus daktarus <ul li>, kaip list item  -->
 <?php
// $daktarai = getDoctors($connection);
//
// echo "<ul>";
// foreach($daktarai as $paimamDaktara){
//     echo "<li>" . $paimamDaktara['name'] . ' ' . $paimamDaktara['lname'] . "</li>";
// };
// echo "</ul>";
?>






<!-- baigiasi tekstas ---------------------------------------------------------------------------------------------->




<!-- uzduotis 4 patobulinti uzduotis 3:
    -paspaudus ant daktaro vardo pavardes atidarytu doctorDB.php -->
<?php

// $daktarai = getDoctors($connection);
// echo "<ul>";
//
// foreach($daktarai as $paimamDaktara){
//     echo "<li><a href='./doctorDB.php'>"  . $paimamDaktara['name'] . ' ' . $paimamDaktara['lname'] . "</a></li>";
// }
// echo "</ul>";

?>
<!-- uzduotis 5 patobulinti uzduoti 4:
    - doctorDB.php isvestu daktaro id -->
<?php
$daktarai = getDoctors($connection);
echo "<ul>";

foreach($daktarai as $paimamDaktara){
    echo "<li>"."<a href='./doctors.php?numeris=" . $paimamDaktara['id'] . "'>"  . $paimamDaktara['name'] . ' ' . $paimamDaktara['lname'] . "</a></li>";
}
echo "</ul>";





 ?>



        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
