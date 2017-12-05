<?php

define('HOST', 'localhost');
define('DB_NAME', 'hospital11');
define('DB_USER', 'gustas122');
define('DB_PASS', 'password123');


$connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);


if($connection){
  echo "Pavyko prisijungti";
}else {
  die('ERROR Nepavyko prisijungti! '. mysqli_connect_error());
}


function createPatient(){
$vardas = "Jurgis";
$pavarde = "Senis";
$daktaro_id = "4";

$mano_sql ="INSERT INTO patients VALUES('', '$vardas', '$pavarde', '$daktaro_id')";

$result = mysqli_query($connection, $mano_sql);

if($result){
  echo "<br />duomenys $vardas, $pavarde, $daktaro_id, suvesti";
} else{
  echo 'nepavyko suvesti duomenu'.mysqli_connect_error();
}
}

function getPatient($x, $con){

  $mano_sql2 = "SELECT*FROM patients WHERE id = $x";
  $result = mysqli_querry($connection, $mano_sql2);

  if ($result){
    $result = mysqli_fetch_assoc($result);
    return $result;
  } else {
    echo "klaida: " . mysqli_errno($connection);
  }
}

$pacientas = getPatient(1, $connection );
print_r($pacientas);

 ?>
