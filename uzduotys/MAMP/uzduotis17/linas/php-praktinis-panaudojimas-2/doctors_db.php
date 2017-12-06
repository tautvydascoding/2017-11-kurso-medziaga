<!<?php






define("DB_HOST", "localhost");
define("DB_USER", "testas1");
define("DB_PASS", "root");
define("DB_NAME", "hospital11");




$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($connection) {
    echo "Prie DB prisijungem sekmingai <br />";
}else {
    die ("error: prisijungti prie db nepavyko. " . mysqli_connection_error());
}


// uzduotis 1
// sukurti f-ja getDoctor($id)
function getDoctor($connect,$nr) {
    $mano_sql = " SELECT * FROM doctors
                    WHERE id=$nr;
                    ";
    // mysqli_query - vykdo SQL ka uzsakete
    $resultatas = mysqli_query($connect, $mano_sql);// is DB gryzta duomenys objiekto formatu
    if ($resultatas) {
        $resultatas = mysqli_fetch_assoc($resultatas);//objiekta pavarciam masyvu
        return $resultatas;
    }else {
        echo "ERROR: Ivyko klaida <br />" . mysqli_error($connect);
    }

}

$daktaras = getDoctor($connection, 5);
// echo "Daktares vardas: " . $daktaras['name']. "<br />";
// print_r($daktaras);

// uzduotis 2
// sukurti f-ja createDoctor( )
function createDoctor($connect,$vardas, $pavarde){
    $mano_sql = "INSERT INTO doctors VALUES('', '$vardas', '$pavarde')";
    $result = mysqli_query($connect, $mano_sql);
    // if ($result) {
    //     echo "Naujas gydytojas issaugotas <br />";
    // }else {
    //     echo "ERROR: nepavyko issaugoti" . mysqli_error($connect);
    // }
}
// createDoctor($connection,"Zygimantas", "Korlov");
//
// $daktaras = getDoctor($connection, 9);
// print_r($daktaras);


// uzduotis 3
// sukurti f-ja deleteDoctor($id)
//
// $my_sql = "DELETE FROM doctors WHERE id=7";
//
// if ($connection->query($my_sql) === TRUE) {
//     echo "<br />daktaras istrintas ";
// } else {
//     echo "Erroras nepavyko istrinti: " . $connection->error;
// }
//
// $connection->close();


function deleteDoctor($connect,$id){
    $mano_sql = "DELETE From doctors WHERE id=$id";
    $result = mysqli_query($connect, $mano_sql);
    // if ($result) {
    //     echo "Naujas gydytojas issaugotas <br />";
    // }else {
    //     echo "ERROR: nepavyko issaugoti" . mysqli_error($connect);
    // }
}
createDoctor($connection,"Zygimantas", "Korlov");
//
// $daktaras = getDoctor($connection, 9);
// print_r($daktaras);






// uzduotis 4
// sukurti f-ja editeDoctor( );

function editeDoctor($connect,$vardas, $pavarde, $id){
    $mano_sql = "UPDATE doctors
                 SET name = '$vardas',
                     lname = '$pavarde'
                     WHERE id=$id
                 ";

    $result = mysqli_query($connect, $mano_sql);
    // if ($result) {
    //     echo "gydytojo duomenys pakeisti";
    // }else {
    //     echo "ERROR: nepavyko " . mysqli_error($connect);
    // }
}
//
// $daktaras = getDoctor($connection,4);
// editeDoctor($connection, "Pietkus", $daktaras['lname'],4);




// uzduotis 5
// sukurti f-ja getDoctors();

function getDoctors($connect) {
    $mano_sql = " SELECT * FROM doctors ORDER BY name DESC";

    $resultatas = mysqli_query($connect, $mano_sql);// is DB gryzta duomenys objiekto formatu
    if ($resultatas) {
        return $resultatas; //return mysql object
    }

}
// // //////////////////////////////////////////////////sudeda
$daktarai = getDoctors($connection);

if (mysqli_num_rows($daktarai) >0) {
    echo "rasta daktarų :". mysqli_num_rows($daktarai) . '<br />';


    foreach ($daktarai as $daktaras) {
        // $daktaras = mysqli_fetch_assoc($daktarai); // is mysql objekto paima pirma daktara ir sudeda i masyva.

        // echo "Nr: " . $daktaras['id'] . "<br />";
        // echo "Vardas: " . $daktaras['name'] . "<br />";
        // echo "Pavarde: " . $daktaras['lname'] . "<br />";

    }
// // arba
// $daktaras = mysqli_fetch_assoc($daktarai);
// while ($daktaras) {
//     echo "Nr: " . $daktaras['id'] . "<br />";
//     echo "Vardas: " . $daktaras['name'] . "<br />";
//     echo "Pavarde: " . $daktaras['lname'] . "<br />";
//     $daktaras = mysqli_fetch_assoc($daktarai);
// }
//
// } else {
//     echo "nerasta" ;
// }

//////////////////////////////////////////////////////////

// $daktarai = getDoctors($connection);
//
// if (mysqli_num_rows($daktarai) >0) {
//     echo "rasta daktarų :". mysqli_num_rows($daktarai) . '<br />';
//
//     foreach ($daktarai as $daktaras) {
//         // $daktaras = mysqli_fetch_assoc($daktarai); // is mysql objekto paima pirma daktara ir sudeda i masyva.
//
//         echo "Nr: " . $daktaras['id'] . "<br />";
//         echo "Vardas: " . $daktaras['name'] . "<br />";
//         echo "Pavarde: " . $daktaras['lname'] . "<br />";
//
//     }
//
//
// } else {
//     echo "nerasta" ;
// }






}

 ?>
