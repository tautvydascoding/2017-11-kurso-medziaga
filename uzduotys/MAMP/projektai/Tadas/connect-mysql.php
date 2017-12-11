<?php
define('HOST', 'localhost');
define('DB_NAME', 'crypto_hoot');
define('DB_USER', 'tadas');
define('DB_PASS', '745361');
$connection = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection): die("[ERROR]: Nepavyko prisijungti prie " . DB_NAME . ". Klaida: " . mysqli_connect_error()); endif;
