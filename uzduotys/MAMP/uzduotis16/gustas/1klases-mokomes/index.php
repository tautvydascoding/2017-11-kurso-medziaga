<?php

class zmogus {
    public $ugis = 150;
    private $sergaLiga = "sirdies yda";
    function getSergaLiga(){
        return $this->sergaLiga;
    }
    function setSergaLiga($x ) {
        $this ->sergaLiga = $x;
    }
    //construct naudojamas paleidus objekta kiekviena karta, kuriant objekta(new komanda)
    function __contruct($x = 0){
        $this->ugis =$x;
    }
}

$Petras = new zmogus(160); // opjekto kurimas
echo "Petro ugis:  $Petras->ugis <br />";

$Petras->ugis = 190;
echo "Petro ugis:  $Petras->ugis <br />";

$liga = $Petras->getSergaLiga();
echo "Petro ligos:  $liga <br />";


$Petras->setSergaLiga("Nebeserga");
$liga = $Petras->getSergaLiga();
echo "Petro ligos:  $liga <br /> <br />";



$Juozas = new Zmogus(190);
$Angele = new Zmogus();


echo "Juozo ugis: $Juozas->ugis <br />";
echo "Angeles ugis: $Angele->ugis <br />";
echo "Petras ugis: $Juozas->ugis <br />";
var_dump($Juozas);


function counter(){
    // $skaicius = 0;// local
    static $skaicius = 0;// local
    echo "<br />" . $skaicius;
    $skaicius++;
}
 counter();
 counter();
 counter();


function testRekursija(){
    static $sk = 0;
    echo "<br /> pradejau darba: $sk <br />";
    $sk++;
    if ($sk < 20) {
        testRekursija(); //kai kvieti save tai vadinama rekursija
    }else{
    echo "<br /> pabaigiau darba: $sk <br />";
}
}

testRekursija();

 ?>
