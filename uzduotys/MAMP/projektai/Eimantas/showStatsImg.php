<?php

// CREATE TABLE statsImg(
//      id int(2) AUTO_INCREMENT PRIMARY KEY,
//      link varchar(50)
// );

// INSERT INTO statsImg VALUES('', './img/stats/guy_comp.jpg');
// INSERT INTO statsImg VALUES('', './img/stats/bw_comp.jpg');
// INSERT INTO statsImg VALUES('', './img/stats/event2_comp.jpg');
// INSERT INTO statsImg VALUES('', './img/stats/bw2_comp.jpg');


$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME);

if(!$connection){
    echo "Error" . mysqli_connect_error();
}

function getStatsImg($con){
        $my_sql = "SELECT * FROM statsimg;";

        $result = mysqli_query($con, $my_sql);

        $grazintiStatsImg = array();
        $i = 0;

        if ($result->num_rows > 0) { // tikrina ar ne tuscias obj
            //
            while($row = $result->fetch_assoc()) {
                $grazintiStatsImg[$i] = $row; // masyvo eilute saugo i nauja masyva
                $i++;
            }
            return $grazintiStatsImg;
        } else {
            echo mysqli_errno($con);
        }
}

$grazintiStatsImg = getStatsImg($connection);
