<?php

include_once('./doctors_db.php');

$nr = $_GET['numeris'];
// print_r( $_GET );

$gydytojas = getDoctor($connection, $nr);



 ?>
<h2> <?php echo $gydytojas['name']; ?></h2>
<h2> <?php echo $gydytojas['lname']; ?></h2>
