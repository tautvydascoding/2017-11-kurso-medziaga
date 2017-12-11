
<?php

// print_r($_GET); // duomenys gauti is index.php review formos

$newReviewUser = $_POST['new-review-username'];
$newReviewContent = $_POST['new-review-content'];

// CREATE TABLE clientReviews(
//              id int(6) AUTO_INCREMENT PRIMARY KEY,
//              username varchar(16),
//              content varchar(200)
//      );


define('HOST', 'localhost');
define('DB_NAME', 'mposh');
define('DB_USERNAME', 'eimantas');
define('DB_PASS', 'password');

$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME);

if(!$connection){
    echo "Error" . mysqli_connect_error();
}

// ADD NEW REVIEW
function addNewReview($newReviewUser, $newReviewContent, $con){
    $my_sql = "INSERT INTO clientReviews VALUES('', '$newReviewUser', '$newReviewContent')";

    $result = mysqli_query($con, $my_sql);
    if(!$result){
        echo "error " . mysqli_error($con);
    }else{
        header("Location: http://localhost/Mano%20projektas/Projektas/#mp-reviews");
    }
};

 addNewReview($newReviewUser, $newReviewContent, $connection);






//
