<?php // uzduotis 3  :
// 1) sukurti dvi klases: User, Admin
// 2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass) return true/ false
// 3) Admin klase  funkcijas:
// changeUserName($newName) - pakeicia savo varda
// changeRights($rgt) - pakeicia savo teisias
// 4) Admin klase paveldi User
 // A) issivesti username,
 // B) pakeisti username
 // C) issivesti username
 // 5)  panaudoti login funkcija
 // A) panaudoti login funkcija , pakeitus username

include_once('./User.php');
include_once('./Admin.php');

 $administratorius = new Admin();
 echo   $administratorius->getName();
// $administratorius->username = "Juozas";  // errror nes protected kintamasis
$administratorius->setName("Juozas");
 echo   $administratorius->getName();

$result = $administratorius->login("Juozassss", "xxx");
echo "login: $result <br>";


//
