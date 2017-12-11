<?php



define('HOST', 'localhost');
define('DB_NAME', 'hospital11');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //

$connection = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
  echo "Prisijungiau prie " . DB_NAME;
} else {
  die("[ERROR]: Nepavyko prisijungti prie " . DB_NAME . ". Klaida: " . mysqli_connect_error());
}

//--------------------------------------------IDEDAM I MYSQL
function createPatient()
{
  $vardas = "Petras";
  $pavarde = "Petraitis";
  $daktaro_id = 3;
  $manoSql = "INSERT INTO patients(name, lname, doctor_id) VALUES('$vardas', '$pavarde', '$daktaro_id');";

  $result = mysqli_query($connection, $manoSql);
  if ($result) {
    echo "Duomenys: $vardas, $pavarde, $daktaro_id ideti sekmingai";
  } else {
    echo "Duomenu ideti nepavyko.. Klaida: " . mysqli_error($connection);
  }
}

function GetPatient($x, $con) {
  $manoSql = "SELECT * FROM patients
                       WHERE id = $x";

  $result = mysqli_query($con, $manoSql);
  if ($result) {
    $result = mysqli_fetch_assoc($result);
    return $result;
  } else {
    echo "[ERROR]: Duomenu paimti nepavyko. Klaida: " . mysqli_error($con);
  }
}

$pacientas = getPatient(1, $connection);
print_r($pacientas);
