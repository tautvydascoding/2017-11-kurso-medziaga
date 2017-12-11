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
          <h1> <?php echo "PHP mailer" ?> </h1>
          <form class="form form-control" action="./email.php" method="get">

            <h2>Susisiekite:</h2>

            <label for="name">Name</label>
            <input type="text" name="name" value="">
            <br />
            <label for="email">Email</label>
            <input type="email" name="email" value="" required>
            <br />
            <label for="antraste">Antraste</label>
            <input type="text" name="title" value="">
            <br />
            <label for="question">Klausimas</label>
            <textarea rows="8" cols="80" name="question" required></textarea>

            <!-- <input type="submit" class="btn btn-primary" name="" value=""> -->
            <button class="btn btn-primary" type="submit" name="button">Siųsti</button>
          </form>
        </div>

        <?php

        ?>

        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
