<?php
/**
 * Zmogus
 */
class Zmogus {
  public $ugis = 0;
  protected $svoris = 0;
  private $pinigai = 0;

  function SetMoney($x){
    $this->pinigai = $x;
  }

  function GetMoney(){
    return $this->pinigai;
  }

  function getWeight(){
    return $this->svoris;
  }
}

include("vyras.php");
include("moteris.php");

$tadas = new Vyras(180, 82, 50);
$laura = new Moteris(160, 46, 100);
printf("Tado ugis: %d, svoris: %d, pinigai: %d, hormonai: %d", $tadas->ugis, $tadas->GetWeight(), $tadas->GetMoney(), $tadas->GetHormons());


 ?>
