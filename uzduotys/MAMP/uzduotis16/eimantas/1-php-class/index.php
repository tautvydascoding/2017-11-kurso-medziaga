<?php

class Zmogus {
    public $ugis = 150;
    private $sergamaLiga = "sirdies liga";

    // leidzia prieiti prie private kintamojo
    function getSergamaLiga(){
        return $this->sergamaLiga;
    }

    function setSergamaLiga($x){
        $this->sergamaLiga = $x;
    }

    // leidzia keisti kintamuosius objekto kurime
    function __construct($x = 150){
        $this->ugis = $x;
    }
}


$Petras = new Zmogus(); // objekto kurimas pagal Zmogaus sablona


echo "Petro ugis: $Petras->ugis <br />";

$Petras->ugis = 188;
echo "Petro naujas ugis: $Petras->ugis <br />";

// echo "Petro ligos: $Petras->sergamaLiga <br />";


$liga = $Petras->getSergamaLiga();
echo "Petro liga: $liga <br />";

$Petras->setSergamaLiga("nieko neserga <br />");

$liga = $Petras->getSergamaLiga();
echo "Petro liga: $liga <br />";


$Juozas = new Zmogus(190);
$Angele = new Zmogus(140);


echo "Juozo ugis: $Juozas->ugis <br />";
echo "Angeles ugis: $Angele->ugis <br />";
echo "Petro ugis: $Petras->ugis <br />";


// spausdina Juozo objekta
// var_dump($Juozas);


function counter(){
    static $sk = 0; // neistrins reiksmes
    echo $sk . "<br />";
    $sk++;

}

counter();
counter();
counter();


function testRekursija(){
    static $skaicius = 0;
    echo "Pradejau darba: $skaicius <br />";

    if($skaicius = 20){
        echo "Jau prasukau 20k <br />";
        return;
    }

    if($skaicius < 20){
        $skaicius++;
        testRekursija(); // f-ja kuri issikviecia save - rekursija/recurtion
    }
    echo "Pabaigiau darba: $skaicius <br />";
}

testRekursija();


//
