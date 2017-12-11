<?php
include_once('./doctorDB.php');

// print_r ($_GET);

$nr = $_GET['numeris'];
$paimamDaktara = getDoctor($connection, $nr);

?>

<h2><?php  echo $paimamDaktara['name']; ?></h2>
<h2><?php  echo $paimamDaktara['lname']; ?></h2>
