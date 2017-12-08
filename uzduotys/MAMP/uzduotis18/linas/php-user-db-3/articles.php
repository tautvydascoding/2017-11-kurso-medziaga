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

    $title = trim($data);
    $title = stripslashes($data);
    $title = htmlspecialchars($data);
    $conetent = trim($data);
    $conetent = stripslashes($data);
    $conetent = htmlspecialchars($data);
    $title = mysqli_real_escape_string(getConnection(), $content);
    $conetent = mysqli_real_escape_string(getConnection(), $content);


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
