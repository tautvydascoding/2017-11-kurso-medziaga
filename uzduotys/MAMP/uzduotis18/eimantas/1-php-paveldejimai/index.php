<?php

include_once "./zmogus.php";
include_once "./moteris.php";
include_once "./vyras.php";


// sukurti obj Monika ir Tadas
// issivesti ju ugi, svori, pinigu skaiciu, hormono(vieno :D) skaiciu

$Monika = new Moteris();

echo "Monikos default reiksmes is zmogaus <br />";

echo "Monikos ugis: " . $Monika->printUgis() . "<br />";
echo "Monikos svoris: " . $Monika->printSvoris() . "<br />";
echo "Monikos pinigai: " . $Monika->printPinigai() . "<br />";
echo "Monikos estrogenai: " . $Monika->getEstrogenai() . "<br />";

echo "<br />";


$Tadas = new Vyras();


//
