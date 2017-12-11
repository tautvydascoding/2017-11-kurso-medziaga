<?php

// print_r($_GET); // duomenys gauti is index.php review formos

// $newReviewUser = $_GET['new-review-username'];
// $newReviewContent = $_GET['new-review-content'];
// $newReviewRating = $_GET['radio'];

// CREATE TABLE clientReviews(
//              id int(3) AUTO_INCREMENT PRIMARY KEY,
//              username varchar(16),
//              content varchar(200),
//              confirmed varchar(10)
//      );

// INSERT INTO clientreviews VALUES('', 'username', 'content', 'confirmed');


$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME);

if(!$connection){
    echo "Error" . mysqli_connect_error();
}

// SHOW LAST 2 REVIEWS
function showNewReview($con){

    // surusiuoja naujausi virsui, grazina 2
    $my_sql = "SELECT * FROM clientReviews ORDER BY id DESC LIMIT 2;";

    $result = mysqli_query($con, $my_sql);

    $grazintiReviews = array();
    $i = 0;
    if ($result->num_rows > 0) { // tikrina ar ne tuscias obj
        //
        while($row = $result->fetch_assoc()) {
            $grazintiReviews[$i] = $row; // masyvo eilute saugo i nauja masyva
            $i++;
        }
        return $grazintiReviews;
    } else {
        echo mysqli_errno($con);
    }

};

$grazintiReviews = showNewReview($connection);
// print_r($grazintiReviews);







//
