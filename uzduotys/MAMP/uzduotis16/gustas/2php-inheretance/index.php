<?php
include_once("./gyvunas-klase.php");
include_once("./tipas-klase.php");
include_once("./liutas-klase.php");

$simba = new liutas();
echo "Rusis: $simba->rusis <br />";
echo "spalva: $simba->spalva <br />";
echo "Ar gyvas: $simba->alive <br />";
$simba->setName("Simba");
$name = $simba->getName();
echo "Vardas: $name <br /><br />";

$scar = new liutas();
$scar ->spalva = "#f2525";
echo "Rusis: $scar->rusis <br />";
echo "Ar gyvas: $scar->alive <br />";
echo "spalva: $scar->spalva <br />";
$scar->setName("Scar");
$name = $scar->getName();
echo "Vardas: $name <br /><br />";

$katinelis = new liutas();
$katinelis->spalva = "#321545";
echo "Rusis: $katinelis->rusis <br />";
echo "Ar gyvas: $katinelis->alive <br />";
echo "Rusis: $katinelis->spalva <br />";
$katinelis->setName("Katinelis");
$name = $katinelis->getName();
echo "Vardas: $name <br /><br />";



class admin{
    
}
