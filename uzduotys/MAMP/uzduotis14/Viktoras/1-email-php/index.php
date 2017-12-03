<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->
        <!-- !!! mano CSS visada zemiau -->
        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body  >
        <div class="container">
            <form class="form form-control" action="./email.php" method="get">
                <h2>Klauskite</h2>
                <label for="name">Vardas</label>
                <input type="text" name="name" value="">
                <br />
                <label for="elpastas">Email</label>
                <input type="email" name="elpastas" value="" required>
                <br />
                <label for="antraste">Antraste</label>
                <input type="text" name="antraste" value="">
                <br />
                <label for="klausimas">Klausimas</label>
                <textarea name="klausimas" rows="8" cols="80" required></textarea>
                <br />
                <input type="submit" name="" value="Siųsti">


            </form>

        </div>



        <!--  !!! patartina failo apacioje   -->
        <script type="text/javascript" src="./main.js">

        </script>
    </body>
</html>
