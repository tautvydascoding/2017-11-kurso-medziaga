<?php
 include_once('./articles_db.php');

$antraste = $_POST['antraste'];
$straipsnis = $_POST['turinys'];
$user_nr = $_POST['user_id'];

// echo $user_nr . $antraste . $straipsnis ;
 createArticle($antraste, $straipsnis, $user_nr );

print_r($_POST);
// print_r($_GET);
