<?php

define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($connect, 'utf8');  //nustato UTF8 formata zodziams

function getConn(){
        global $connect;
    if(!$connect){
        die("Error: Prisijungti nepavyko" . mysqli_connect_error());
    } else {
        // echo "Prisijungti pavyko <br />";
    }
    return $connect;
}


function getArticle($connect, $nr){
    $mano_sql = "SELECT * FROM articles WHERE id = $nr;";
    $result = mysqli_query($connect, $mano_sql);

    if($result){
        $result = mysqli_fetch_assoc($result);
        return $result; // grazina visa my-sql objekta
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($connect);
    }
}

// print_r($article);
// echo "<br />";



function getArticles($connect){
    $mano_sql = "SELECT * FROM articles order by id desc;";
    $result = mysqli_query($connect, $mano_sql);

    if($result){
        return $result; // grazina visa my-sql objekta
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($connect);
    }
}

$straipsniai = getArticles($connect);

// if( mysqli_num_rows($straipsniai) > 0){
//     echo "<span>Viso rasta straipsnių: </span>" . mysqli_num_rows($straipsniai) . "<br /> <hr />";

    // foreach($straipsniai as $straipsnis){
    //     echo "Nr: " . $straipsnis ['id'] . "<br />";
    //     echo "Data: " . $straipsnis ['date'] . "<br />";
    //     echo "Pavadinimas: " . $straipsnis ['artclTitle'] . "<br />";
    //     echo "Tekstas: " . $straipsnis ['artclContent'] . "<br />";
    //     echo "Autorius: " . $straipsnis ['artclAuthor'] . "<br /><br />";
    // }

    // $straipsnis = mysqli_fetch_assoc($straipsniai); //is mysql OBJEKTO paimama pirma eilute ir sudeda i masyva
    // while($straipsnis){
    //     echo "Nr: " . $straipsnis ['id'] . "<br />";
    //     echo "Data: " . $straipsnis ['date'] . "<br />";
    //     echo "Pavadinimas: " . $straipsnis ['artclTitle'] . "<br />";
    //     echo "Tekstas: " . $straipsnis ['artclContent'] . "<br />";
    //     echo "Autorius: " . $straipsnis ['artclAuthor'] . "<br /><br />";
    //     $straipsnis = mysqli_fetch_assoc($straipsniai); //is mysql OBJEKTO paimama pirma eilute ir sudeda i masyva
    // }

// } else{
//     echo "Lentele yra tuscia";
// }

// print_r($straipsniai);===============================isprintinastraipsnius



function getArticleTitles($connect){
    $mano_sql = "SELECT artclTitle FROM articles;";
    $result = mysqli_query($connect, $mano_sql);


    if($result){
        return $result; // grazina visa my-sql objekta
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($connect);
    }
}





function addArticle($connect, $title, $article, $name){
    //===============================================APSAUGA NUO SQL INJECTION ATAKU
    $title = trim($title);
    $title = stripslashes($title);
    // $tit = htmlspecialchars($tit);
    $title = mysqli_real_escape_string(getConn(), $title);//============apsauga nuo XSS

    $article = trim($article);
    $article = stripslashes($article);
    // $cont = htmlspecialchars($cont);
    $article = mysqli_real_escape_string(getConn(), $article);//==========apsauga nuo XSS

    $name = trim($name);
    $name = stripslashes($name);
    // $usrid = htmlspecialchars($usrid);
    $name = mysqli_real_escape_string(getConn(), $name);//========apsauga nuo XSS
    //=============================================================================

    $manosql = "INSERT INTO articles VALUES('', NOW(), '$title', '$article', '$name');";
    $result = mysqli_query($connect, $manosql);

    if($result){
        echo '<h3 class="msg msg-scs"> Straipsnis sukurtas. </h3>';
        return $result;
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($connect);
    }}





function updateArticle($connect, $kelintas, $title, $article, $name){
    $mano_sql = "UPDATE doctors SET
    artclTitle = '$title',
    artclContent  = '$article',
    artclAuthor = $name
    WHERE id=$kelintas;";
    $uzklausa = mysqli_query($connect, $mano_sql);

    if($uzklausa){
        echo"Duomenys pakeisti<br />";
    } else{
        echo 'KLAIDA: nepavyko pakeisti gydytojo. ' . mysqli_error($connect);
    }
}


function deleteArticle($connect, $nr){
    $mano_sql = "DELETE FROM articles WHERE id =$nr;";
    $result = mysqli_query($connect, $mano_sql);

    if($result){
        echo '<h3 class="msg msg-dlt"> Straipsnis ištrintas, kelio atgal nebera.</h3>';
    }else {
        echo "ivyko klaida: error!!! <br />" . mysqli_error($connect);
    }
}



//
