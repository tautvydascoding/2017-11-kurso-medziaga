<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="./icons/dimobis.png">
    <title>Dimobis.lt - Productas</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libs/css/style.css?version.1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css">
</head>
    <body>
        <?php
            // header
            include_once('inc/header.php');
            // products
            include_once('inc/main/main-product.php');
            // footer
            include_once('inc/footer.php');
        ?>
    </body>
</html>
