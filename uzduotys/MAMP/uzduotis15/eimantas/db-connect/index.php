<?php

define('HOST', 'localhost');
define('DB_NAME', 'hospital11');
define('DB_USERNAME', 'eimantas');
define('DB_PASS', 'password');

// KANIEKSEN I DB
$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME); // 80 portas

if($connection){
    echo ("connected to DB");
}else{
    die("ERROR: " . mysqli_connect_error());
}

// SUKURTA INFO
$vardas = "Tomas";
$pavarde = "Tomazas";
$daktaro_id = 3;

function createPatient (){
    // KURIAMA SQL KOMANDA - KAIP STRING
    // VIENGUBOS KABUTES VEIKIA SU KINTAMAISIAIS :D
    $mano_SQL = "INSERT INTO patients VALUES('', $daktaro_id, '$vardas', '$pavarde');";

    // PAVERCIA I SQL KOMANDA IR SAUGO I KINTAMAJI
    $result = mysqli_query($connection, $mano_SQL);

    IF($result){
        echo("Ideta sekmingai");
    }else{
        echo("Nepavyko ideti duomenu" . mysqli_error($connection)); // $connection grazins erroro koda - kazkaip jis bus priskirtas
    }
}

function getPatient($x, $con){
    // global $connection; // paskelbia globale, kitaip nepasiektu

    // isves viska kas susije su duota ID
    $mano_sql = "SELECT * FROM patients
                    WHERE id = $x;
                ";
    $result = mysqli_query($con, $mano_sql);

    if ($result) {
        $result = mysqli_fetch_assoc($result); // MYSQL duomenu obj grazina kaip array
        return $result;
    }else{
        echo("Nepavyko" . mysqli_error($con));
    }
}
$pacientas = getPatient(1, $connection); // i funkcija paduos 1 kuris nurodo id DB-eje, ka gauti, ir DB nustatymus

print_r($pacientas);



//
