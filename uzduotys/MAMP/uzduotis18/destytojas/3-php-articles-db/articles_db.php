<?php


// 3) sukurti lentele "articles" su stulpeliais:
// "id", "title", "content", "date", "user_id"
// 3.2) sukurti pora straipsniu


 define('DB_HOST', 'localhost');
 define('DB_USER', 'tautvydasDelete');  // root
 define('DB_PASS', 'tratata');   // root
 define('DB_NAME', 'savaite4');

 $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME, 8889);
 function getConnection() {
     global $connection;
     // if ($connection == false) {
     if (!$connection) {
        die("ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error());
     }
     return $connection;
 }



 // $my_sql = "INSERT INTO articles
 //                     VALUES (
 //                             id = '',
 //                             title = '$title',
 //                             content = '$content',
 //                             date = NOW(),
 //                             user_id = '$user_nr'
 //                         );";

//
function createArticle($title, $content, $user_nr) {
    $my_sql = "INSERT INTO articles
                        VALUES (
                                 '',
                                '$title',
                                '$content',
                                NOW(),
                                '$user_nr'
                            );";
    $query = mysqli_query(  getConnection() , $my_sql);
    if (!$query) {
         echo "ERROR: sukurti straipsnio nepavyko" . mysqli_error(getConnection() );
    }
}
// createArticle("Rastas milijonas litu", "Bet is jo naudos jokios", 6);
