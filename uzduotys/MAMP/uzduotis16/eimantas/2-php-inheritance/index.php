<?php

require_once('./gyvunas.php');
require_once('./liutas.php');
require_once('./tipas.php');

 // uzduotis 0: susikurti 3 Obj. klasas Liutas
$pirmasLiutas = new Liutas();
$antrasLiutas = new Liutas();
$treciasLiutas = new Liutas();

// uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)

$pirmoSpalva = $pirmasLiutas->spalva = ("geltonas");
$antroSpalva = $antrasLiutas->spalva = ("rudas");
$trecioSpalva = $treciasLiutas->spalva = ("maisytas");

echo "$pirmoSpalva <br /> $antroSpalva <br /> $trecioSpalva <br />";

// uzduotis2: A) Liuto klasei susikurti PRIVATU kintamaji "name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".

echo "<br />";

//B) Pakeisti vardus ir atspausdinti
$gautasVardas = $pirmasLiutas->getLiutoName();
echo "pirmo liuto vardas yra: $gautasVardas <br />";
$pirmasLiutas->setLiutoName("simba <br />");
$gautasVardas = $pirmasLiutas->getLiutoName();
echo "dabar jo vardas: $gautasVardas <br />";

$gautasVardas = $antrasLiutas->getLiutoName();
echo "antro liuto vardas yra: $gautasVardas <br />";
$antrasLiutas->setLiutoName("fila <br />");
$gautasVardas = $antrasLiutas->getLiutoName();
echo "dabar jo vardas: $gautasVardas <br />";

$gautasVardas = $treciasLiutas->getLiutoName();
echo "trecio liuto vardas yra: $gautasVardas <br />";
$treciasLiutas->setLiutoName("pipi <br />");
$gautasVardas = $treciasLiutas->getLiutoName();
echo "dabar jo vardas yra $gautasVardas <br />";


// uzduotis 3 - pabandyti paveldimuma:
// 1) sukurti dvi klases: User, Admin
// 2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass)
// 3) Admin klase  funkcijas:  changeUserName($nm),  changeRights($rgt)

// 4)
 // A) issivesti username,
 // B) pakeisti username
 // C) issivesti username
 // 5)  panaudoti login funkcija
 // A) panaudoti login funkcija , pakeitus username






// =====================extends=====================

 // uzduotis: sukurti klases "Gyvunas", "Tipas" - kuri paveldi Gyvunas, "Liutas" - kuri paveldi Tipas
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



   // uzduotis2: A) Liuto klasei susikurti PRIVATU kintamaji "name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".
   //B) Pakeisti vardus ir atspausdinti
