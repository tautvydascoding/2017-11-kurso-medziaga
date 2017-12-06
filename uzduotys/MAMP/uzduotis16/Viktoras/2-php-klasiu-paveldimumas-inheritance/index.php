// =====================extends=====================

 // uzduotis: sukurti klases
 //"Gyvunas",
 //"Tipas" - kuri paveldi Gyvunas,
 //"Liutas" - kuri paveldi Tipas
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

<?php include 'gyvunas.php';?>
<?php include 'tipas.php';?>
<?php include 'liutas.php';?>

<?php $simba = new liutas();
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
$simba -> setName ("Simba");
$pirmasLiutas = $simba->getName();
echo "pirmas liuto vardas yra: $pirmasLiutas";
echo "<br />";
echo "<br />";

echo "<br />";
print_r($simba);
echo "<br />";
echo "<br />";
echo "<br />";

$arnoldas = new liutas();
$arnoldas->setSpalva ("rudas");
$arnoldas->setName ("Arnoldas");
echo "<br />";
echo "<br />";
echo "$$arnoldas->spalva";
echo "<br />";
echo "<br />";
$antrasLiutas = $arnoldas->getName();
echo "antro liuto vardas yra: $antrasLiutas";
echo "<br />";
echo "<br />";


$darius = new liutas();
$darius -> setSpalva("rozinis");
$darius -> setName("Darius");
echo "<br />";
echo "<br />";
echo "$$darius->spalva";
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
$treciasLiutas = $darius->getName();
echo "trecio liuto vardas yra: $treciasLiutas";
echo "<br />";
echo "<br />";



?>



 // uzduotis 0: susikurti 3 Obj. klasas Liutas
  // uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)

   // uzduotis2: A) Liuto klasei susikurti PRIVATU kintamaji "name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".
   B) Pakeisti vardus ir atspausdinti

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
