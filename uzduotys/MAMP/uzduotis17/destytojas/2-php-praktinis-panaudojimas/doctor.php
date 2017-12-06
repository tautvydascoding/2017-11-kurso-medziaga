<?php

// print_r( $_GET );
include_once('./doctors_db.php');


 $nr = $_GET['numeris'];

 $gydytojas = getDoctor($connection,  $nr );


 ?>

<h2> <?php echo $gydytojas['name']; ?> </h2>
<h3> <?php echo $gydytojas['lname']; ?> </h3>
