<?php
include_once("./user.php");
include_once("./admin.php");

$administratorius = new admin();
echo $administratorius->getUserName() . "<br />";

$administratorius->changeUserName("Juozas");
echo $administratorius->getUserName() . "<br />";

$result = $administratorius->login("Juozas", "pass");
echo "login: $result <br />";
