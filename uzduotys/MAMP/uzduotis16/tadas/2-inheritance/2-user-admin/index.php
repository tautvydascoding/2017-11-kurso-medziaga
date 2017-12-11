<?php


include_once("user.php");
include_once("admin.php");

$admin = new Admin();
$admin->username = "Administratorius";

$user = new User();
$user->username = "Vartotojas";
$user->password = "manoilgasslaptazodis123";
$user->rights = "Change theme background";

echo "Vartotojo dabartinis vardas: $user->username";
echo "<br />";

$admin->ChangeUserName($user, "Noob");

echo "Vartotojo pakeistas vardas: $user->username";
echo "<br />";

$user->Login();
