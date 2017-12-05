<?php

define( "DB_HOST", 'localhost');
define( "DB_USER", 'gustas122');
define( "DB_PASS", 'password123');
define( "DB_NAME", 'hospital11');

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
    echo "sekmingai prisijungete <br /> <br />";
} else {
    die ("prisijungimo klaida <br />" . mysqli_connect_error());
}




function getDoctor($prisijung, $nr){ //nr ir prisijung yra local!!!!!!!!
    $mano_sql = "SELECT * FROM doctors
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

// uzduotis 2
// sukurti f-ja createDoctor(...)
function createDoctor($connection, $vardas, $pavarde){
    $mano_sql = "INSERT INTO doctors VALUES('17', '$vardas', '$pavarde');";
    $uzklausa = mysqli_query($connection, $mano_sql);
    if($uzklausa){
        echo"issaugojom daktara <br />";
    } else{
        echo 'KLAIDA: nepavyko sukurti gydytojo. ' . mysqli_error($connection);
    }
}


// createDoctor($connection, "Secilija", "Po");
// $daktaras = getDoctor($connection, 10);
// print_r($daktaras);


// uzduotis 3
// sukurti f-ja deleteDoctor($id)

function deleteDoctor($connection, $kelintas){
    $mano_sql = "DELETE FROM doctors
                WHERE id = '$kelintas';";
    $uzklausa = mysqli_query($connection, $mano_sql);
    if($uzklausa){
        $mano_sql = "SELECT * FROM doctors
                    WHERE id = '$kelintas'";
        mysqli_query($connection, $mano_sql);
        echo "<br />daktaras istrintas <br />";
    } else {
        echo 'KLAIDA: nepavyko istrinti gydytojo. ' . mysqli_error($connection);
    }
}

// deleteDoctor($connection, 14);


// uzduotis 4
// sukurti f-ja editDoctor(...);
function editDoctor($connection, $kelintas, $vardas, $pavarde){
    $mano_sql = "UPDATE doctors SET
        name = '$vardas',
        lname = '$pavarde'
         WHERE id=$kelintas;";
    $uzklausa = mysqli_query($connection, $mano_sql);

    if($uzklausa){
        echo"Duomenys pakeisti<br />";
    } else{
        echo 'KLAIDA: nepavyko pakeisti gydytojo. ' . mysqli_error($connection);
    }
}

$keitimas = editDoctor($connection, 15, 'Ponas', 'Lopas');
print_r($keitimas);


// uzduotis 5
// sukurti f-ja getDoctors();

//







//
