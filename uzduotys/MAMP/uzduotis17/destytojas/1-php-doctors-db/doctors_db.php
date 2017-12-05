<?php



 define("DB_HOST", 'localhost'  );
 define("DB_USER", 'tautvydasDelete'  ); // root
 define("DB_PASS", 'tratata'  );          // root
 define("DB_NAME", 'hospital11'  );


 $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);
 if ($connection) {
     echo "Prie DB prissijungem sekmingai <br>";
 } else {
     die ("ERROR: prisijungti pri DB nepavyko. " . mysqli_connect_error());
 }

 // uzduotis 1
 // sukurti f-ja getDoctor($id)
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

 $daktaras = getDoctor($connection, 5);
 echo "Daktares vardas:" .  $daktaras['name']. "<br>";
print_r($daktaras);


 // uzduotis 2
 // sukurti f-ja createDoctor(...)
 function createDoctor($connect, $vardas, $pavarde){
     $mano_sql = "INSERT INTO doctors VALUES('', '$vardas', '$pavarde');";
     $result = mysqli_query($connect, $mano_sql);
     if ($result) {
         echo "Naujas gydytojas issaugotas <br />";
     } else {
         echo "ERROR: nepavyko issaugoti gydytojo. " . mysqli_error($connect);
     }
 }
 // createDoctor($connection, "Zygimantas", "Korlov");
 // $daktaras = getDoctor($connection, 9);
 // print_r($daktaras);

 // uzduotis 3
 // sukurti f-ja deleteDoctor($id)
 
 // uzduotis 4
 // sukurti f-ja editeDoctor(...);
 // uzduotis 5
 // sukurti f-ja getDoctors();

//
