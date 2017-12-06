<?php




define('DB_HOST','localhost');
define('DB_USER','testas1');
define('DB_PASS','root');
define('DB_NAME','savaite4');

$connection = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);
function getConnection() {
    global $connection;
    if (!$connection ){
        die("");
    }
    return $connection;
}






function createArticle($title, $conetent, $user_nr){

    $title = trim($title);
    $title = stripslashes($title);
    $title = htmlspecialchars($title);
    $conetent = trim($conetent);
    $conetent = stripslashes($conetent);
    $conetent = htmlspecialchars($conetent);
    $title = mysqli_real_escape_string(getConnection(), $title);
    $conetent = mysqli_real_escape_string(getConnection(), $conetent);


    $my_sql = "INSERT INTO articles VALUES (
                    '',
                    '$title',
                    'content',
                    NOW(),
                   '$user_nr'
                );";
    $query = mysqli_query( getConnection(), $my_sql);
    if (!$query) {
        echo "ERRORAS" . mysqli_error(getConnection());
    }
}
createArticle("Rastas milijonas litu", "Bet is jo jokios nenaudos", 6);















?>
