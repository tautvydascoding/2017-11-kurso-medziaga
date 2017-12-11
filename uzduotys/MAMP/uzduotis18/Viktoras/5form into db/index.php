<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css?ver=1.0.0">

    </head>
    <body  >

            <form class="" action="createArticle.php" method="post">
                <label for="antraste">Antraste</label>
                <input type="text" name="antraste" value="" maxlenght="200">
                <br />
                <label for="antraste">Turinys</label>
                <textarea name="turinys" rows="8" cols="80"></textarea>
                <br />
                <input type="hidden" name="user_id" value="<?php echo 14 ?>">

                <button type="submit" name="">Irasyti</button>

            </form>






        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
