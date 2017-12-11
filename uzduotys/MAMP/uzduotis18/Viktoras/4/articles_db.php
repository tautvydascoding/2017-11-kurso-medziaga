<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "articles");

    // uzduotis 1
    // sukurti f-ja getDoctor($id)

$connection = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);
function getConnection() {
    global $connection;
    return $connection;
    if (!$connection){
        echo "Error";
    }


}

function createArticle($title, $content, $userId) {
    $title = trim($title);
    $title = stripslashes($title);
    // $title = htmlspecialchars($title);
    $content = trim($content);
    $content = stripslashes($content);
    // $content = htmlspecialchars($content);
    $title = mysqli_real_escape_string(getConnection(),$title);
    $content = mysqli_real_escape_string(getConnection(),$content);


    $mysql = "INSERT INTO articles VALUES (
        '',
        '$title',
        '$content',
        NOW(),
        '$userId'
    );";
    $query = mysqli_query(getConnection(), $mysql);
    if (!$query) {
        echo "Error, sukurti straipsnio nepavyko";
    }
}

createArticle('Saugok', 'Save','2');







?>
