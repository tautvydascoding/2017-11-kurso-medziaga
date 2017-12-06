<?php
include_once('./Gyvunas.php');
include_once('./Tipas.php');
include_once('./Liutas.php');
$simba = new Liutas();
echo "Rusis:  $simba->rusis <br />";
echo "Ar gyvas:  $simba->alive <br />";

///0,1
$sidas = new Liutas();
$sidas->spalva = "#ffff";
echo "sido spalva:  $sidas->spalva <br />";


$vandenidas = new Liutas();
$vandenidas->spalva = "#0000";
echo "vandenidas spalva:  $vandenidas->spalva <br />";


$liutpalaikis = new Liutas();
$liutpalaikis->spalva = "#ab34ac";
echo "liutpalaikio spalva:  $liutpalaikis->spalva <br />";

//2


function setName($x) {
    }
    function getName($sidas) {
        return $this->name;
}
echo $name;


 ?>
