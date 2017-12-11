<?php



define('HOST', 'localhost');
define('DB_NAME', 'hospital11');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //

$connection = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
  // echo "Prisijungiau prie " . DB_NAME;
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
 // $pacientas = getPatient(1, $connection);
 // print_r($pacientas);

//----------------------------DAKTARAS GET------------------------------------

function GetDoctorByID($conn, $id)
{
  $mySql = "SELECT * FROM doctors WHERE id=$id";

  $result = mysqli_query($conn, $mySql);
  if ($result):
    $result = mysqli_fetch_assoc($result);
    $tempTxt = "Daktaras $result[name], $result[lname] (ID: $result[id]) <br />";
    return $tempTxt;
  else:
    echo "[ERROR]: Duomenu paimti nepavyko. Klaida: " . mysqli_error($conn);
  endif;
}

//Getinam viena daktara
// $doctorString = GetDoctorByID($connection, 1);
// echo $doctorString;

function GetDoctors($conn, $quantity)
{
  if($quantity == false): $quantity = 999; endif;
  $mySql = "SELECT * FROM doctors LIMIT $quantity";

  $result = mysqli_query($conn, $mySql);
  if ($result):

    if(mysqli_num_rows($result) > 0):
      while ($row = mysqli_fetch_assoc($result)) {
        echo "Daktaras $row[name], $row[lname] (ID: $row[id]) <br />";
      }
    endif;

  else:
    echo "[ERROR]: Duomenu paimti nepavyko. Klaida: " . mysqli_error($conn);
  endif;
}

GetDoctors($connection, 1);

//----------------------------DAKTARAS SET------------------------------------

function InsertNewDoctor($conn, $name, $lastName)
{
  if ($name == "" || $lastName == ""){
    echo "[ERROR] InsertNewDoctor funkcijai truksta parametru. Funkcija nutraukiama.";
    return;
  }

  $mySql = "INSERT INTO doctors(name, lname) VALUES('$name', '$lastName')";

  $result = mysqli_query($conn, $mySql);
  if($result):
    echo "Naujas daktaras sekmingai ikeltas.<br />";
  else:
    echo "[ERROR]: Duomenu ikelti nepavyko. Klaida: " . mysqli_error($conn);
  endif;
}

// $doctorString = InsertNewDoctor($connection, "Petriukas", "Petruskevicius");



//----------------------------DAKTARAS Update------------------------------------
function UpdateDoctor($conn, $id, $name, $lname)
{
  if($id < 0):
    echo "[ERROR] Funkcijoje UpdateDoctor nurodytas ID < 0. Shutting down.. <br />";
    return;
  endif;

  if($name == "" && $lname == ""):
    echo "[WARNING] Nenurodytas vardas ir pavarde funkcijoje UpdateDoctor. Niekas nepakeista.. <br />";
    return;
  endif;

  if($name == "" && $lname != ""): $mySql = "UPDATE doctors SET lname='$lname' WHERE id=$id";
  elseif($name != "" && $lname == ""): $mySql = "UPDATE doctors SET name='$name' WHERE id=$id";
  elseif($name != "" && $lname != ""): $mySql = "UPDATE doctors SET name='$name',lname='$lname' WHERE id=$id"; endif;

  $result = mysqli_query($conn, $mySql);
  if($result):
    echo "Daktaro (ID: '$id'), duomenys sekmingai atnaujinti.<br />";
  else:
    echo "[ERROR]: Duomenu atnaujinti nepavyko. Klaida: " . mysqli_error($conn);
  endif;

}

// UpdateDoctor($connection, 5, "Petras", "Petrauskas");


//----------------------------DAKTARAS Update-----------------------------------
function DeleteDoctor($conn, $id)
{
  $mySql = "DELETE FROM doctors WHERE id='$id'";

  $result = mysqli_query($conn, $mySql);
  if($result): echo "Daktaras (ID: '$id') sekmingai istrintas.";
  else: echo "[ERROR]: Duomenu istrinti nepavyko. Klaida: " . mysqli_error($conn); endif;
}

// DeleteDoctor($connection, 5);
