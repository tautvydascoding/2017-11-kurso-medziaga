<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" href="./icons/dimobis.png">
    <title>Dimobis.lt - Pagrindinis</title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./libs/css/style.css?version.1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css">
</head>
    <body>
        <?php
            // header
            include_once('inc/header.php');
            // main/home
            include_once('inc/main/main-home.php');
            // footer
            include_once('inc/footer.php');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./libs/js/main.js" ></script>
    </body>
</html>
