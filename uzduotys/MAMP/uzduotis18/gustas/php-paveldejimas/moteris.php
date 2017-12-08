<?php

include_once("./zmogus.php");

class Moteris extends Zmogus{
    private $estrogenas = '1200';

    public function print(){
        echo "Moteris<br />";
    }
    function getSvoris(){ //public by default
        return $this->svoris;
    }
    function setSvoris($x){
        $this->svoris = $x;
    }
    function getHormones(){
        return $this->estrogenas;
    }
    function setHormones($x){
        return $this->estrogenas = $x;
    }
}
