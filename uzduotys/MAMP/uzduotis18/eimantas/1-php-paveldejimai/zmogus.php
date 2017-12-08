<?php

class Zmogus {
    public $ugis = 'default';
    protected $svoris = 'default';
    private $pinigai = 'default';

    function printUgis(){
        return $this->ugis;
    }
    function printSvoris(){
        return $this->svoris;
    }
    function printPinigai(){
        return $this->pinigai;
    }
}
