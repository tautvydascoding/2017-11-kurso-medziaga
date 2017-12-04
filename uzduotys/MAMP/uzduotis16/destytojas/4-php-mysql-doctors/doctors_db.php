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
function getDoctor($nr) { // $nr yra local
    $mano_sql = " SELECT * FROM doctors;"
}

 $daktaras = getDoctor(3);
 echo "Daktares vardas:" .  $daktaras['name']. "<br>";

 // uzduotis 2
 // sukurti f-ja createDoctor(...)
 // uzduotis 3
 // sukurti f-ja deleteDoctor($id)
 // uzduotis 4
 // sukurti f-ja editeDoctor(...);
 // uzduotis 5
 // sukurti f-ja getDoctors();

//
