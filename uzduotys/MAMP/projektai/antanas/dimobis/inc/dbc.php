<?php
    define('HOST', 'localhost');
    define('DB_NAME', 'dimobis');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    $conn = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($conn, 'utf8');

    if($conn) {
        // echo " Prisijungem pire DB sekmingai";
    } else {
        die ("ERROR: prisijungti prie DB nepavyko. Klaida: " . mysqli_connect_error());
    }
