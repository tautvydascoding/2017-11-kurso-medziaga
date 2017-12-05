<?php

// uzduotis: sukurti klases
 // "Gyvunas",
 // "Tipas" - kuri paveldi Gyvunas,
 // "Liutas" - kuri paveldi Tipas

// Gyvunas:
//    public $alive = true;
//    public $positionX;
//    public $positionY;
// Tipas:
//    public $rusis = "kate";
//    public $minta = "mesa";
// Liutas:
//    public $kailis = true;
//    public $spalva = "#a34baa";
//    private $amzius = 5;


include_once('./Gyvunas.php');
include_once('./Tipas.php');
include_once('./Liutas.php');
$simba = new Liutas();
echo "Rusis: $simba->rusis <br>";
echo "Ar gyvas?: $simba->alive <br>";
