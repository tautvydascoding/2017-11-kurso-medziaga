<?php


    define('HOST', 'localhost');
    define('DB_NAME', 'hospital11');
    define('DB_USER', 'root');  // galite naudoti ir savo user name
    define('DB_PASS', 'root'); //

     $connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);

    if($connection) {
        echo " Prisijungem pire DB sekmingai";
    } else {
        die ("ERROR: prisijungti prie DB nepavyko. Klaida: " . mysqli_connect_error());
    }

    function createPatient() {
        $vardas = "Tomas";
        $pavarde = "Tomaitis";
        $daktaro_id = 3;

        $mano_sql = "INSERT INTO patients VALUES('', '$vardas' , '$pavarde' , $daktaro_id )  " ;

        $result =   mysqli_query($connection, $mano_sql);

        if($result) {
            echo "Duomenys: $vardas , $pavarde ideti sekmingai  ";
        } else {
            echo "Nepavyko ideti duomenu:  $vardas , $pavarde ". mysqli_error($connection) ;
        }
    }

    function getPatients($x, $con) {
        $mano_sql = "SELECT * FROM patients
                              WHERE id=$x;
                    ";
        $result = mysqli_query($con, $mano_sql);
        if ($result){
            var_dump($result);
            // mysqli_fetch_assoc
            // mysqli_fetch_array 
            $result = mysqli_fetch_array($result); // object - pavercia i array (asociatyvu)
            return $result;
        } else {
            echo "klaida: " . mysqli_error($con);
        }
    }
    $pacientas = getPatients(1, $connection );
    print_r($pacientas);


    //
