<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>...</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css?ver=1.0.0">

    </head>
    <body>

        <h1>hi</h1>

        <?php
            // issaugo kintamuosius
            $name = "vardas";
            $age = 9;
            
            // constantai
            define("DB_NAME", 'riklys');
            define("DB_PASS", 'xxx.aa');
            define("HOST", 'localhost');
            define("USER", 'vardas');

            // atvaizduoja kintamuosius, jungia su "." (+ neveikia)
            echo $name . "<br/>" . $age;
            echo "duomenu bazes info: " . DB_NAME . "<br  />";

          ?>






        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
