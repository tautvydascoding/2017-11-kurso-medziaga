<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'gustas122');
define('DB_PASS', 'password123');
define('DB_NAME', 'savaite4');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($connect, 'utf8');  //nustato UTF8 formata zodziams

function getConn(){
    global $connect;
    if(!$connect){
        die("Error: Prisijungti nepavyko" . mysqli_connect_error());
    } else {
        // echo "Prisijungti pavyko <br />";
    }
    return $connect;
}

function createArticle($tit, $cont, $usrid){
    //===============================================APSAUGA NUO SQL INJECTION ATAKU
    $tit = trim($tit);
    $tit = stripslashes($tit);
    // $tit = htmlspecialchars($tit);
    $tit = mysqli_real_escape_string(getConn(), $tit);//============apsauga nuo XSS

    $cont = trim($cont);
    $cont = stripslashes($cont);
    // $cont = htmlspecialchars($cont);
    $cont = mysqli_real_escape_string(getConn(), $cont);//==========apsauga nuo XSS

    $usrid = trim($usrid);
    $usrid = stripslashes($usrid);
    // $usrid = htmlspecialchars($usrid);
    $usrid = mysqli_real_escape_string(getConn(), $usrid);//========apsauga nuo XSS
    //=============================================================================

    $mano_sql = "INSERT INTO articles VALUES ('', '$tit', '$cont', NOW(), '$usrid');";

    $query = mysqli_query(getConn(), $mano_sql);
    if(!$query){
        echo "Error:nepavyko issaugoti strapsnio". mysqli_error(getConn());
    } else {echo "Article issaugotas!";
}}

// createArticle(
//     "dar vienas straipsnis",
//     "I'd like to order one large phone with extra phones please. cell phone, no no no rotary... and payphone on half. Wha, me irresponsible ?! All I wanted you to do was to hand me a screwdriver, Morty!",
//     6
// );
