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

        <div class="container bg-info">
            <h1>PHP mailer!</h1>
            <h2>Sveiki, cia galite parasyti savo zinute mums!</h2>

            <form class="form form-control" action="./email.php" method="get">

              <label for="name">Vardas</label>
              <input type="text" name="fname" placeholder="First Name" value=""> <br />

              <label for="email">Email</label>
              <input type="email" name="email" placeholder="iveskite el pasto adresa" value="" required><br />

              <label for="antraste">Antraste</label>
              <input type="text" name="antraste" value=""><br />

              <label for="klausimas">Klausimas</label><br />
              <textarea name="klausimas" rows="8" cols="80" required></textarea>


              <!-- <input type="submit" name='' value='siusti' /> -->
              <button type="submit">Siusti</button>


            </form>
            <br />

        </div>





        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
