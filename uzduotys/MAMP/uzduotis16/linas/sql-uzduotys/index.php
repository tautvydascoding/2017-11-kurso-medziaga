<?php






class Zmogus {
    public $ugis = 150;

    private $sergamaLiga = "sirdies ida";
    function getSergamaLiga() {
        return $this->sergamaLiga;
    }

    function setSergamaLiga( $x) {
        $this->sergamaLiga = $x;

    }

    function __construct($x = 150) {
        $this->ugis = $x;
    }

}

$Petras = new Zmogus(160); //objekto kurimas

echo "Ugis:  $Petras->ugis <br />";
$Petras->ugis = 188;
echo "Petro ugis: $Petras->ugis <br />";

$liga = $Petras->getSergamaLiga();
echo "Petro ligos: $liga <br />";

$Petras->setSergamaLiga("nieko neserga");
$liga = $Petras->getSergamaLiga();
echo "Petro ligos: $liga <br />";



$Juozas = new Zmogus(190);
$Angele = new Zmogus();

echo "Juozo ugis : $Juozas->ugis <br>";
echo "Angeles ugis : $Angele->ugis <br>";
echo "Petro ugis : $Petras->ugis <br>";

// var_dump($Juozas); // duoda info apie kintamaji jis skirtas tik testavimui





function counter(){
    // $sk = 0; //localus
    static $sk = 0;
    echo $sk. "<br>";
    $sk++;
}

counter();
counter();
counter();

function testRekursija() {
    static $sk = 0;
    echo "pradejau darba: $sk <br />";
    if ($sk < 20) {
        $sk++;
        testRekursija(); //recurtion - kai funkcija kviecia save

    }
    echo "Pabaigiau darba: $sk <br />";

}
testRekursija();

//
 ?>
