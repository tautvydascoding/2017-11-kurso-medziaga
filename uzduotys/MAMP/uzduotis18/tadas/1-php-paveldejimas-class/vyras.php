<?php

class Vyras extends Zmogus {
  private $testosteronai = 1000;

  function __construct($height, $weight, $money) {
     $this->ugis = $height;
     $this->svoris = $weight;
     $this->SetMoney($money);
  }

  function GetHormons(){
    return $this->testosteronai;
  }
}
