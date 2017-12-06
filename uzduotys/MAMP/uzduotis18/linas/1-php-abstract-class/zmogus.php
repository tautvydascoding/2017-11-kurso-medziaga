<?php


class Zmogus {
    public $ugis = 0;

    // protected yra paveldimas private
    protected $svoris = 0;
    private $pinigai = 0;
    function print(){
        echo "ZMogus<br>";
    }
    function getPinigai(){
        return $this->pinigai;
    }

    function setPinigai($x){
     $this->pinigai = $x;
    }

}
