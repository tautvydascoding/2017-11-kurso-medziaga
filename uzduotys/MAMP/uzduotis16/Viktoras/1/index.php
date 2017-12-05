<?php
    class Zmogus {
        public $ugis = 150;
        private $sergamaLiga = "sirdies yda";
        function getSergamaLiga () {
            return $this->sergamaLiga;
        }
        function setSergamaLiga ($x) {
            $this->sergamaLiga = $x;
        }
        //konstruktorius

        function __construct ($x = 0) { //galima apsirasyti default $x reiksme, jei netycia kurdamas objekto vartotojas nepaduotu ugio;
            $this->ugis = $x;
        }

}
$Petras = new Zmogus (160); //sukursime nauja objekta su ugiu 160


// $Petras = new Zmogus(); //objekto kurimas
echo "Petro Ugis: $Petras->ugis <br>";

$Petras->ugis = 188;
echo "Naujas Petro Ugis: $Petras->ugis <br>";
// echo "Petro ligos: $Petras->sergamaLiga <br>";

$liga = $Petras->getSergamaLiga ();
echo "Petro liga: $liga <br />";

$Petras->setSergamaLiga ("niekuo neserga");
$liga = $Petras->getSergamaLiga ();
echo "Petras pasveiko?: $liga <br />";

$Juozas = new Zmogus(190);


echo "Juozo ugis: $Juozas->ugis <br />";
var_dump($Juozas);

function counter () {
    // $sk = 0; kintamasis lokalus, is ramo istrinamas
    static $sk; //kintamasis globalus, po funkcijos iskvietimo neistrinamas;
    echo $sk."<br />";
    $sk++;
}

counter ();
counter ();
counter ();

function testRekursija () {
    static $sk = 0;
    echo "pradejau darba: $sk <br />";
    if ($sk < 20) {
        $sk++;
        testRekursija ();  //kai funkcija issikviecia pati save - recursion;
    }
    echo "pabaigiau darba $sk <br />";

}
testRekursija ();




 ?>
