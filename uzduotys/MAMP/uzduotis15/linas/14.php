<?php

define('HOST', 'localhost');
define('DB_NAME', 'hospital11');
define('DB_USER', 'testas1');
define('DB_PASS', 'root');


$connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    echo "Prisijungem prie DB sekmingai";
}else{
    die("error: prisijungt nepavyko: " . mysqli_connect_error());
}


$vardas = "Tomas";
$pavarde = "Tomaitis";
$daktaro_id = 3;


function createPAtienet() {

    $mano_sql = "INSERT INTO patients VALUES('', '$vardas', '$pavarde', '$daktaro_id');";

    $result = mysqli_query($connection, $mano_sql);
    if ($result) {
        echo "Duomenys:  $vardas, $pavarde ideti sekmingai ";
    }else{
        echo "Nepavyko prideti duomenu: $vardas, $pavarde". mysqli_error($connection);
    }
}



function getPatients($x, $con) {
    $mano_sql = "SELECT * FROM patients
                          WHERE id=$x;
                ";
        $result = mysqli_query($con, $mano_sql);
        if ($result){
            var_dump($result);
            $result = mysqli_fetch_assoc($result); // object pavercia i array
            return $result;
        }else {
            echo "klaida: " . mysqli_error($con);
        }
}
$pacientas = getPatients(1, $connection);
print_r($pacientas);


 ?>
