<?php
include('./articles_db.php');

$antraste = $_POST['antraste'];
$straipsnis = $_POST['turinys'];
$userNr = $_POST['user_id']; // user_id imamas is masyvo toks, koks uztaisytas hidden inpute, nes jis keliauja kartu su viskuo
createArticle($antraste, $straipsnis, $userNr);








 ?>
