<?php
include_once('./doctors-db.php');



$nr = $_GET['numeris'];
// paziuret kas atkeliauja get'e
// print_r($_GET);
$gydytojas = getDoctor($connection, $nr);
?>

<h2><?php echo $gydytojas['name']?></h2>
<h3><?php echo $gydytojas['lname']?></h3>
