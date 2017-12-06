<?php


class Moteris extends Zmogus{
    private $estrogenai = 1000;
    // overwriting tevo f-ja
    function print(){
        echo "Moteris<br>";
    }
    public function getSvoris(){
        return $this->svoris;
    }
    public function setSvoris($x){
       $this->svoris = $x;
    }
    function getEstrogenai(){
        printEstorogenai();
        return $this->estrogenai;
    }
    private function printEstorogenai(){
        echo $this->estrogenai;
    }
}
