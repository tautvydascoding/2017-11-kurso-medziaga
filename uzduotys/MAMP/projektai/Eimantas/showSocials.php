<?php

// CREATE TABLE socials(
//         id int(2) AUTO_INCREMENT PRIMARY KEY,
//         name varchar(12),
//         link varchar(50)
// );

// INSERT INTO socials VALUES('', 'facebook', 'https://www.facebook.com/mantas.paseveckas');
// INSERT INTO socials VALUES('', 'instagram', 'https://www.instagram.com/matthewposh/?hl=en');
// INSERT INTO socials VALUES('', 'soundcloud', 'https://soundcloud.com/mantaspaseveckas');

define('HOST', 'localhost');
define('DB_NAME', 'mposh');
define('DB_USERNAME', 'root');
define('DB_PASS', 'root');

$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME);

if(!$connection){
    echo "Error" . mysqli_connect_error();
}

function getSocials($con){
        $my_sql = "SELECT * FROM socials;";

        $result = mysqli_query($con, $my_sql);

        $grazintiSocials = array();
        $i = 0;

        if ($result->num_rows > 0) { // tikrina ar ne tuscias obj
            //
            while($row = $result->fetch_assoc()) {
                $grazintiSocials[$i] = $row; // masyvo eilute saugo i nauja masyva
                $i++;
            }
            return $grazintiSocials;
        } else {
            echo mysqli_errno($con);
        }
}

$grazintiSocials = getSocials($connection);
