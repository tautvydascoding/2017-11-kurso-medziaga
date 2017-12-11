<?php

class zmogus {
  public $ugis = 150;
  private $liga = "Sirdies ida";

  function getSergamaLiga()
  {
    return $this->liga;
  }

  function setSergamaLiga($x)
  {
    $this->liga = $x;
  }

  function __construct($x = 0)
  {
    $this->ugis = $x;
  }

};

$petras = new zmogus(); // objekto kurimas

echo "Petro ugis: $petras->ugis <br />";
$petras->ugis = 188;
echo "Petro ugis: $petras->ugis <br />";

$liga = $petras->getSergamaLiga();
echo "Petro ligos: $liga <br />";

$petras->setSergamaLiga("Niekuo neserga");

$liga = $petras->getSergamaLiga();
echo "Petro ligos: $liga <br />";


$juozas = new zmogus(190);
$angele = new zmogus();

echo "Juozo ugis: $juozas->ugis <br />";
echo "Angeles ugis: $angele->ugis <br />";
echo "Petro ugis: $petras->ugis <br />";





function counter()
{
  static $sk = 0;
  echo $sk;
  $sk++;
}

counter();
counter();
counter();



function testRekursija()
{
  static $sk = 0;
  echo "Pradejau darba: $sk <br />";
  if($sk < 20):
    testRekursija(); // rekursija kai funkcija kviecia pati save
  endif;
  $sk++;
  echo "Pabaigiau darba: $sk <br />";
}

testRekursija();

?>
