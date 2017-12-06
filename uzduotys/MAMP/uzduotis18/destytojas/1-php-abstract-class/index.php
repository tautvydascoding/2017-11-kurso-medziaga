

<?php






// sukurti dvi klases: zmogus ir moteris ir vyras
// moteris paveldi zmogu ir vyras paveldi zmogu
// zmogus turi: public ugis, protected svoris, private pinigai
// moteris: estrogenai
// vyras: testosteronai

// uzduotis: susikurti objekta: Monika (moteris) ir Tadas (vyras)
// issivesti ju ugi, svori, pinigu skaiciu, hormono skaiciu

include_once('./zmogus.php');
include_once('./moteris.php');
include_once('./vyras.php');

$Monika = new Moteris();
$Monika2 = new Moteris();
echo "Monikos ugis:" .  $Monika->ugis . "<br>";
$Monika->ugis = 186;
echo "Monikos ugis:" .  $Monika->ugis . "<br>";
echo "Monikos2 ugis:" .  $Monika2->ugis . "<br>";
$Monika->print();
//
echo "Monikos2 ugis:" .  $Monika->getSvoris() . "<br>";
