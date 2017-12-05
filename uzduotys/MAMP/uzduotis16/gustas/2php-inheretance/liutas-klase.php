<?php

class liutas extends tipas{
    public $kailis = true;
    public $spalva = "#a34baa";
    private $amzius = 5;
    private $name = "vardas";
    function getName(){
        return $this->name;
    }
    function setName($x = 0){
        $this->name = $x;
    }

}
