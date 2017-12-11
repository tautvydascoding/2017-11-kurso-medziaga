<?php





class Liutas extends Tipas {
   public $kailis = true;
   public $spalva = "#a34baa";
   private $amzius = 5;
   private $name = "";

   function setName($x)
   {
     $this->name = $x;
   }

   function getName()
   {
     return $this->name;
   }
}





?>
