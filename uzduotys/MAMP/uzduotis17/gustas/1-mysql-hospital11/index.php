<?php

define( "DB_HOST", 'localhost');
define( "DB_USER", 'gustas122');
define( "DB_PASS", 'password123');
define( "DB_NAME", 'hospital11');

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
    echo "sekmingai prisijungete <br />";
} else {
    die ("prisijungimo klaida <br />" . mysqli_connect_error());
}






function getDoctor($prisijung, $nr){ //nr ir prisijung yra local!!!!!!!!
    $mano_sql = "select*FROM doctors
                        WHERE id=$nr;
                ";
                //ivykdo virsuj apsirasyta sql funkcija
    $result = mysqli_query($prisijung, $mano_sql);// is duomenu bazes grizta duomenys objekto formatu

    if($result){
        $result = mysqli_fetch_assoc($result); // asoc f-ja pavercia i masyva
        return $result;
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($prisijung);
    }
}

$daktaras = getDoctor($connection, 3);
print_r($daktaras);

echo "<br />Daktaras:" . $daktaras['name'] . "<br />";

function createDoctor($connection, $vardas, $pavarde){
    $mano_sql = "INSERT INTO doctors VALUES('', '$vardas', '$pavarde');";
    $uzklausa = mysqli_query($connection, $mano_sql);
    if($uzklausa){
        echo"issaugojom daktara <br />";
    } else{
        echo 'KLAIDA: nepavyko sukurti gydytojo. ' . mysqli_error($connection);
    }
}


createDoctor($connection, "Pavlovas", "Klepas");
$daktaras = getDoctor($connection, 10);
print_r($daktaras);









//
