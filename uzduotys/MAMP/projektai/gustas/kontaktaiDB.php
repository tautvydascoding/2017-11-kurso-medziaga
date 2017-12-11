<?php

define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($connect, 'utf8');  //nustato UTF8 formata zodziams


function addContact($connect, $name, $lname, $number, $address ){
    $manosql = "INSERT INTO kontaktai VALUES('', '$name', '$lname', '$number', '$address');";
    $uzklausa = mysqli_query($connect, $manosql);
    if($uzklausa){
        echo "Pridėti kontakta pavyko";
    } else{
        echo "Pridėti kontakto  nepavyko" . mysqli_connect_error($connect);
    }}
//PRIDEDAMAS KONTAKTAS================================================================
// addContact($connect, '', 'Kevis', 'Lecis', '65321558', 'Dūkštų g. 28, Kaunas');

function getContact($connect, $nr){
    $mano_sql = "SELECT * FROM kontaktai WHERE id = $nr;";
    $result = mysqli_query($connect, $mano_sql);

    if($result){
        $result = mysqli_fetch_assoc($result);
        return $result; // grazina visa my-sql objekta
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($connect);
    }
}










//
