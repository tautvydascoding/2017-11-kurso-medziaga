<?php


class Zmogus {
    public $ugis = 0;
    // protected - paveldimas private
    protected $svoris = 0;
    private $pinigai = 2;
    function print(){
        echo "ZMogus<br>";
    }
    public function getPinigai(){
        return $this->pinigai;
    }
    public function setPinigai($x){
       $this->pinigai = $x;
    }
}
