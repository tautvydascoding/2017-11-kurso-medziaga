<?php

include_once('./article-db.php');

$userAntraste  = $_POST['antraste'];
$userInput = $_POST['turinys'];
$userID = $_POST['user_id'];
// createArticle();

echo $userAntraste . "<br />" . $userInput . "<br />" . $userID;
createArticle($userAntraste, $userInput, $userID);
// print_r($_POST);
