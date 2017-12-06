<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "hospital11");

    // uzduotis 1
    // sukurti f-ja getDoctor($id)

$connection = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    echo "Prie DB prisijungem <br />";
}
else {
    die("ERRoR, prisijungti prie db nepavyko" . mysqli_connect_error());
}

function getDoctor($connect, $nr) { // ir connect ir nr yra local, connect gaus is getDoctor (t.y. $connection)
    $mano_sql = "SELECT * FROM doctors WHERE id=$nr;";
//            mysqli_query vykdys viska ka jam nurodysim
    $result = mysqli_query($connect, $mano_sql); // sitoj vietoj is duomenu bazes grizta duomenys objekto formatu;
    if($result) {
            //    is duomenu bazes viskas grizta objektais, mysqli_fetch_assoc pavercia objekta i masyva;
        $result = mysqli_fetch_assoc($result); //paversk $result kintamaji is objekto i masyva; nereikia kurtis naujo kintamojo, ant to pacio objekto isves masyva
        return $result;
    }
    else {
        echo "ERROR: ivyko klaida <br />" . mysqli_error($connect);
    }
}


$daktaras = getDoctor($connection, 3); //gris masyvas
echo "Daktares vardas:" .$daktaras['name'] ."<br />";
print_r($daktaras); //galima paziuret kas grizo is duomenu bazes, masyva padare mysqli_fetch_assoc komanda




 // uzduotis 2
 // sukurti f-ja createDoctor(...)
function createDoctor($connect, $vardas, $pavarde) {
    $mano_sql = "INSERT INTO doctors VALUES('','$vardas','$pavarde')";
    $result = mysqli_query($connect, $mano_sql);
    if($result) {
        echo "naujas gydytojas issaugotas <br />";
    }
    else {
        echo "ERROR: nepavyko issaugoti gydytojo" . mysqli_error($connect);
    }
}
// createDoctor($connection, "Zygimantas", "Korlov");
//
// $daktaras = getDoctor($connection, 12);
// print_r($daktaras);
echo "<br />";
echo "<br />";

// uzduotis 3
// sukurti f-ja deleteDoctor($id)

function deleteDoctor ($connect, $idNr) {
    $mano_sql = "DELETE FROM doctors WHERE id=$idNr";
    $result = mysqli_query($connect, $mano_sql);
    if($result) {
        echo $idNr."gydytojas istrintas <br />";
    }
    else {
        echo "ERROR: istrinti gydytojo nepavyko" . mysqli_error($connect);
    }
}

// deleteDoctor ($connection, 10);

 // uzduotis 4
 // sukurti f-ja editeDoctor(...);




 // uzduotis 5
 // sukurti f-ja getDoctors();




 function getDoctors ($connect) {
     $mano_sql = "SELECT * FROM doctors ORDER BY name DESC"; //ASC butu didejimo tvarka
     $result = mysqli_query($connect, $mano_sql);
     $pabandymui = mysqli_fetch_assoc($result); // fields -sunumeruoja 0,1,2 !!! SITA KOMANDA SUKURIA TIK VIENA MASYVA IS OBJEKTO (PIRMA PAIMTA)
     echo (mysqli_num_rows($result))."<br />";


//==========================Pirmas geresnis trumpesnis budas============================
//     grizo objektas $result, tai nera paprastas masyvas - tai matrica;
     // foreach ($result as $value) {
     //    echo $value['id']." ".$value['name']." ".$value['lname']."<br />";
     // }

//=========================Antras ilgesnis budas bet irgi geras=========================
    $daktaras = mysqli_fetch_assoc($result);
    while ($daktaras) {
            echo $daktaras['id']." ".$daktaras['name']." ".$daktaras['lname']."<br />";
            $daktaras = mysqli_fetch_assoc($result);
    }






}

    getDoctors($connection);
// // if (mysqli_num_rows($daktarai)>0) {
// if ($daktarai[''])
//     echo "viso rasta daktaru".mysqli_num_rows($daktarai)."<br />";
// }
// else {
//     echo 'lentele yra tuscia';
// }



//
 ?>
