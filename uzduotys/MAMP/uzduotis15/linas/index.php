<?php


define ('HOST', 'localhost');
define ('DB_NAME', 'scamsite');
define ('DB_USER', 'testas1');
define ('DB_PASS', 'root');


$connection = mysqli_connect ( HOST, DB_USER, DB_PASS, DB_NAME );

    if($connection) {
        echo "Prisijungem prie duombazes";
    }else {
        die ("ERROR: prisijungt nepavyko. Klaida: " . mysqli_li_error());
    }

function idetiScameri() {
    $vardas = "Eugenijus";
    $pavarde = "Abrikosas";
    $saskaitosNR = "LT39785178";
    $Trumpai = "suvalge begemota";

    $kitas_sql = "INSERT INTO scameriai VALUES('', '$vardas','$pavarde','$saskaitosNR','$Trumpai' )";

    $rezultatas = mysqli_query($connection,$kitas_sql);

    if($rezultatas) {
        echo " Duomenys ideti sekmingai ";
    }else {
        echo " Duomenu ideti nepavyko " . mysqli_error($connection);

    }

}

function paimtiScameri($x, $con) {
    $kitas_sql = "SELECT * FROM scameriai
                            WHERE id=$x;

                        ";
    $rezultatas = mysqli_query($con, $kitas_sql);
    if ($rezultatas) {
        var_dump($rezultatas);
        $rezultatas = mysqli_fetch_array($rezultatas);
        return $rezultatas;
    }else {
        echo "klaida " . mysqli_error($con);
    }
}
$scameris = paimtiScameri(1,$connection);
print_r($scameris);






 ?>
