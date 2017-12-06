
<?php

// 0) sukurti DB "savaite4"
// 1) use savaite4;             // pasirinkti lentele su kuria dirbsite
// 2) sukurti lentele "users" su stulpeliais:
// "id", "username", "pass", "email", "rights"

define('HOST', 'localhost');
define('DB_NAME', 'savaite4');
define('DB_USERNAME', 'eimantas');
define('DB_PASS', 'password');

// KANIEKSEN I DB
$connection = mysqli_connect(HOST, DB_USERNAME, DB_PASS, DB_NAME); // 80 portas

if($connection){
    echo ("connected to: " . DB_NAME . " DB <br />");
}else{
    die("ERROR: " . mysqli_connect_error());
}

// 2.2) sukurti pora nariu
function createUser($username, $pass, $email, $rights, $con){
    $my_sql = "INSERT INTO users VALUES('', '$username', '$pass', '$email', '$rights');";
    $result = mysqli_query($con, $my_sql);
    if ($result) {
        echo "Added " . $username . " to DB <br />";
    }else{
        echo "Error" . mysqli_error($con);
    }
}

// createUser("valius", "slaptazodis2", "valius@gmail.com", "teises", $connection);


// 3) sukurti lentele "articles" su stulpeliais:
// "id", "title", "content", "date", "user_id"
// 3.2) sukurti pora straipsni

function createArticle($title, $content, $date, $userID, $con){
    $my_sql = "INSERT INTO articles VALUES ('', '$userID', '$title', '$content', '$date');";
    $result = mysqli_query($con, $my_sql);
    if($result){
        echo "Added new article " . $title . "<br />";
    }else{
        echo "Error " . mysqli_error($con);
    }
}

// createArticle("straipsnis3", "turinys3", "data", 10, $connection);

function showContent($userID, $con){
    $my_sql = "SELECT title FROM articles
                WHERE user_id = '$userID'";

    $result = mysqli_query($con, $my_sql);
    if($result){
        $result = mysqli_fetch_assoc($result);
         return $result;
    }else{
        echo "Error: " . mysqli_error($con);
    }
}

$rodo = showContent(10, $connection);
echo "$rodo[title]";







//
