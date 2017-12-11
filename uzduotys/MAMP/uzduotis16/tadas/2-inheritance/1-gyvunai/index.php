<?php

include_once("gyvunas.php");
include_once("tipas.php");
include_once("liutas.php");

$simba = new Liutas();

// echo "Rusis: $simba->rusis <br />";
//
// echo "Ar gyvas?: $simba->alive <br />";

$king = new Liutas();
$queen = new Liutas();

$king->spalva = "#BB33BB";
echo "Lion King color: $king->spalva <br />";

$queen->spalva = "#CC55CC";
echo "Lion Queen color: $queen->spalva <br />";

$simba->spalva = "#FF00FF";
echo "Lion Simba color: $simba->spalva <br />";

//uzduotis2

$king->setName("Karalius");
echo "Lion King name is: " . $king->getName() . "<br />";

$queen->setName("Karaliene");
echo "Lion Queen name is: " . $queen->getName() . "<br />";

$simba->setName("Simba");
echo "Lion Simba name is: " . $simba->getName() . "<br />";
