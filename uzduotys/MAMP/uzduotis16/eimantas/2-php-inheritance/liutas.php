<?php
require_once('./tipas.php');

    class Liutas extends Tipas{
        public $kailis = true;
        public $spalva = "#a34baa";
        private $amzius = 5;
        private $name = "Name";

        function getLiutoName(){
            return $this->name;
        }

        function setLiutoName($x){
            $this->name = $x;
        }


    }


 ?>
