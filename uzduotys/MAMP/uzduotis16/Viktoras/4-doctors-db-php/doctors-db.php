<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "hospital11");


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
//

 ?>
