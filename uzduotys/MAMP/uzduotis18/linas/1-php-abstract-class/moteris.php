<?php


class Moteris extends Zmogus{
    private $estrogenai = 1000;
    // overwriting tevo f-ja
    function print(){
        echo "Moteris<br>";
    }
    function getSvoris(){
        return $this->svoris;
    }

    function setSvoris($x){
     $this->svoris = $x;
    }

    function getEstrogenai(){
        return $this->estrogenai;
    }

}
