<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Php basics</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css?ver=1.0.0">

    </head>
    <body>

        <div class="container bg-info">
            <h1>Isijunk konsole</h1>

        </div>


        <?php

        $name = "Petras";
        $age = 21;

        echo $name;
        print($age);

        // + nejungia stringu, bet "." does

        echo $name . "<br />" . $age;

        define("DB_NAME", "ryklys");
        define("DB_PASS", "123456");
        define("DB_HOST", "localhost");
        define("DB_USER", "root");

        echo "Duomenu bazes pavadinimas: " . DB_NAME . "<br />";

        echo "<br /><br /><br />";

        $username = "Tadzis";
        $user_logged_for = 35;
        $password = "745698879898";

        $tekstas_perkelimui = "Vartotojas $username, paskutines sesijos metu buvo prisijunges $user_logged_for minutes.<br />
        vartotojo slaptazodzio kintamojo tipas yra: " . gettype($password);

        settype($password, "integer");

        ?>
        <div class="">
          <h2><?php echo $tekstas_perkelimui ?></h2>
          <h1>Po pakeitimo varotojo slaptazodzio tipas yra: <?php echo gettype($password); ?></h1>
        </div>


        <?php
        $online = true;
        $buvo_online = 10;

        if ($online == true xor $buvo_online >= 30):
          ?>
          <h1>Smth welcome text..</h1>
          <?php
        endif;
         ?>



        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
