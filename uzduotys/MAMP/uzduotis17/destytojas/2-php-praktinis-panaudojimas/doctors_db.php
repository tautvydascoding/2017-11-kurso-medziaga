<?php



 define("DB_HOST", 'localhost'  );
 define("DB_USER", 'tautvydasDelete'  ); // root
 define("DB_PASS", 'tratata'  );          // root
 define("DB_NAME", 'hospital11'  );


 $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);
 if ($connection) {
     // echo "Prie DB prissijungem sekmingai <br>";
 } else {
     die ("ERROR: prisijungti pri DB nepavyko. " . mysqli_connect_error());
 }

 // ---------------------------------------------
function getDoctor($connet, $nr) { // $nr, $connet- yra local
    $mano_sql = " SELECT * FROM doctors
                           WHERE id=$nr;
                 ";
    // mysqli_query - vykdo SQL ka uzsakete
    $result = mysqli_query($connet, $mano_sql); // is DB grista duomenys obj. formatu
    if ($result) {
        $result = mysqli_fetch_assoc($result); // objiekta paverciam i masyva
        return $result;
    } else {
        echo "ERROR: Ivyko klaida <br>" . mysqli_error($connet);
    }
}
 // ---------------------------------------------
//  $daktaras = getDoctor($connection, 5);
//  echo "Daktares vardas:" .  $daktaras['name']. "<br>";
// print_r($daktaras);


 // ---------------------------------------------
 function createDoctor($connect, $vardas, $pavarde){
     $mano_sql = "INSERT INTO doctors VALUES('', '$vardas', '$pavarde');";
     $result = mysqli_query($connect, $mano_sql);
     if ($result) {
         // echo "Naujas gydytojas issaugotas <br />";
     } else {
         echo "ERROR: nepavyko issaugoti gydytojo. " . mysqli_error($connect);
     }
 }
  // ---------------------------------------------
 // createDoctor($connection, "Zygimantas", "Korlov");
 // $daktaras = getDoctor($connection, 9);
 // print_r($daktaras);

 // ---------------------------------------------
function deleteDoctor($connect, $id) {
    $mano_sql = "DELETE FROM doctors WHERE id=$id";
    $result = mysqli_query($connect, $mano_sql);
    if ($result) {
        // echo "Gydytojas istrintas <br />";
    } else {
        echo "ERROR: nepavyko istrinti gydytojo. " . mysqli_error($connect);
    }
}
 // ---------------------------------------------
// deleteDoctor($connection, 10);

 // ---------------------------------------------
 function editeDoctor($connect, $vardas, $pavarde, $id){
     $mano_sql = "UPDATE doctors
                        SET
                            name = '$vardas',
                            lname = '$pavarde'
                        WHERE id=$id
                  ";

     $result = mysqli_query($connect, $mano_sql);
     if ($result) {
          echo "Gydytojo duomenys pakeisti sekmingai <br />";
     } else {
         echo "ERROR: nepavyko pakeist gydytojo duomenu  " . mysqli_error($connect);
     }
 }
  // ---------------------------------------------
 // $daktaras = getDoctor($connection, 4);
 // editeDoctor($connection,  "Pietkus", $daktaras['lname'], 4);

  // ---------------------------------------------
 function getDoctors($connet) { // $nr, $connet- yra local
     $mano_sql = " SELECT * FROM doctors ORDER BY name DESC "; // ASC
     // mysqli_query - vykdo SQL ka uzsakete
     $result = mysqli_query($connet, $mano_sql); // is DB grista duomenys obj. formatu
     if ($result) {
         return $result; // return: mysql Object
     } else {
         echo "ERROR: Ivyko klaida <br>" . mysqli_error($connet);
     }
 }
  // ---------------------------------------------
  
 // $daktarai = getDoctors($connection);

 // if(  mysqli_num_rows($daktarai) > 0) {
 //     echo "Viso rasta daktaru: " . mysqli_num_rows($daktarai) . "<br>";
 //
 //     // foreach ($daktarai as $daktaras) {
 //     //     echo "Nr: " . $daktaras['id'] . " <br />";
 //     //     echo "Vardas: " . $daktaras['name'] . " <br />";
 //     //     echo "Pavarde: " . $daktaras['lname'] . " <br />";
 //     // }
 //     // arba
 //     $daktaras = mysqli_fetch_assoc($daktarai);  // is mysql Objekto  paima pirma daktara ir sudeda i masyva
 //     while( $daktaras){
 //             echo "Nr: " . $daktaras['id'] . " <br />";
 //             echo "Vardas: " . $daktaras['name'] . " <br />";
 //             echo "Pavarde: " . $daktaras['lname'] . " <br />";
 //             $daktaras = mysqli_fetch_assoc($daktarai);  // is mysql Objekto  paima pirma daktara ir sudeda i masyva
 //     }
 // } else {
 //     echo "Nerasta daktaru <br>";
 // }
    //
