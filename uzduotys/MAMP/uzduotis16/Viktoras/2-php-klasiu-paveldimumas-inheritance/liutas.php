<?php
class liutas extends tipas {
    public $kailis = true;
    public $spalva = "#a34baa";
    private $amzius = 5;
    private $name = "noname";

    function setSpalva ($naujaSpalva){
        $this -> spalva = $naujaSpalva;
    }

    function setName ($naujasvardas){
        $this -> name = $naujasvardas;
    }

    function getName () {
        return $this->name;
    }

} ?>
