<?php


include_once('./User.php');
include_once('./Admin.php');



$administratorius = new Admin();
echo $administratorius->getName ();
// $administratorius->username = "Juozas"; error nes portected kontamasis
$administratorius->setName("Juozas");
echo $administratorius->getName ();

$result = $administratorius->login("Juozas", "xxx");
echo "login $result <br>";

 ?>
