<?php




 class Zmogus {
     public $ugis = 150;
     private $sergamaLiga = "sirdies ida";
     function getSergemaLiga() {
         return $this->sergamaLiga;
     }
     function setSergamaLiga( $x) {
         $this->sergamaLiga = $x;
     }
     // constructor'ius paleidizmas keikviena karta, kuriant obj (new komanda)
     function __construct($x = 0) {
         $this->ugis = $x;
     }
 }
 $Petras = new Zmogus(160); //  objekto kurismas

 echo "Petro ugis: $Petras->ugis <br />";
 $Petras->ugis = 188;
  echo "Petro ugis: $Petras->ugis <br />";

$liga = $Petras->getSergemaLiga();
echo "Petro ligos: $liga  <br />";

 $Petras->setSergamaLiga("nieko neserga");
 $liga = $Petras->getSergemaLiga();
 echo "Petro ligos: $liga  <br />";

$Juozas = new Zmogus(190);
$Angele = new Zmogus();

echo "Juozo ugis: $Juozas->ugis <br>";
echo "Angeles ugis: $Angele->ugis <br>";
echo "Petras ugis: $Petras->ugis <br>";
var_dump($Juozas);   //


function counter() {
    // $sk = 0; // local
    static $sk = 0; //
    echo $sk . "<br>";
    $sk++;
}
counter();
counter();
counter();

function testRekursija() {
    static $sk = 0;
    echo "Pradejau darba: $sk <br />";
    if ($sk < 20) {
        $sk++;
         testRekursija(); // recurtion - kai f-ja kviecia save
         echo "Pabaigiau : $sk <br />";
    }
    echo "Pabaigiau darba: $sk <br />";
}
testRekursija();


//
