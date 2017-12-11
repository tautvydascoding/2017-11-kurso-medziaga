<?php

class zmogus{
        public $ugis = 10;
        protected $svoris = 5;
        private $pinigai = 2;
        function getPinigai(){
            return $this->pinigai;
        }
        function setPinigai($x){
            $this->pinigai = $x;
        }
        function print(){
            echo "Zmogus<br />";
        }
 }
