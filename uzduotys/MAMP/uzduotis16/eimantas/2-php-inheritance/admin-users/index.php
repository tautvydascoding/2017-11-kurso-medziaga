

<?php
 // uzduotis 3 - pabandyti paveldimuma:
// 1) sukurti dvi klases: User, Admin
// 2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass)
// 3) Admin klase  funkcijas:  changeUserName($nm),  changeRights($rgt)
// 4)
 // A) issivesti username,
 // B) pakeisti username
 // C) issivesti username

require_once("./admin.php");
require_once("./user.php");

$Tom = new User();
$Jake = new User();

$adminas = new Admin();

echo "Tomo vardas pries keitima: $Tom->username <br />";
echo "Admino vardo keitimo f-ja: ";
$Tom->username = $adminas->changeUserName("Darius");
echo $Tom->username;
echo "<br />";


// 5)  panaudoti login funkcija
// A) panaudoti login funkcija , pakeitus username

$Tom->Login("Darius" , "slaptazodis");


 ?>
