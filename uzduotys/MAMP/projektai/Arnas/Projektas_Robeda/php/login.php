<?php
//redirect('./login.php',false);
function redirect($url, $statusCode = 303)
{
   header('Location: ' .$url, true, $statusCode);
   die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo1</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <!-- <link rel="stylesheet" href="./css/header.css"> -->
    </head>
    <body >

            <?php
            define('DB_HOST','localhost');
            define('DB_USER',"root");
            define('DB_PASS',"root");
            define('DB_NAME',"robeda_meniu");
            if(isset($_POST['username'])&& isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
              }
            else{
                $username = "";
                $password = "";
            }

            function getCon(){
            $connection = mysqli_connect(DB_HOST, DB_USER ,DB_PASS, DB_NAME);
            mysqli_query($connection,"SET CHARACTER SET 'utf8'");
            if($connection==false):
              echo"Nepavyko prisijungti prie DB";
            else:
              //echo"Prisijungeme prie DB"."<br/>";
            endif;
            return  $connection;
            }

            function tikrinti($username, $password){
              if($username == "" || $password == ""){
                echo "<b class='mdl-color-text--accent'>Neivesti duomneys</b>";
              }
              else{
                $salyga ="SELECT COUNT(id)
                          FROM naudotojas
                          WHERE username = '$username' AND passwordas = '$password';";
                //echo "$username $password <br/>";
                $result = mysqli_query(getCon(),$salyga);
                if(!$result){
                  echo"Neveikia";
                }
                $x=mysqli_fetch_assoc($result);
                $kint = implode("",$x);
                $kint = (int)$kint;
                  if($kint == 1){
                    print_r($x);
                    $url = './loginNext.php';
                    redirect($url);
                  }
                  else{
                    echo "<b class='mdl-color-text--accent'>Neteisingai ivesti duommenys</b>";
                  }
                $url = './loginNext.php';
                //redirect($url);
              }

            }

             ?>
                <section class="container-flued bg-light mainSection">
                  <html>
<head>
<!-- Material Design Lite CSS -->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
<!-- Font Awesome CSS -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Material Design icon font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<style>
.util-center {
    margin: auto;
}

.util-max-512px {
    max-width: 512px;
}

.util-spacing-h--40px {
    margin-top: 40px;
    margin-bottom: 40px
}
.util-no-decoration {
    text-decoration: none;
}
.antraste h1{
  text-align: center;
  font-weight: bold;
  color: #d9d9d9;
  text-shadow: 2px 2px 2px #000;
  font-size: 7vw;
}
</style>

<body class="mdl-color--blue-grey-50">

<div class="antraste">
    <h1>RobEda</h1>
</div>
<!-- LOGIN FORM -->
<div class="mdl-grid">

<div class="mdl-card mdl-shadow--16dp util-center util-spacing-h--40px">
    <div class="mdl-card__title mdl-color--grey-800">
        <h2 class="mdl-card__title-text mdl-color-text--white">Naudotojo prisijungimas</h2>
    </div>
    <div class="mdl-card__supporting-text mdl-grid">

        <b class="mdl-color-text--accent">
            <?php
                tikrinti($username, $password);
              ?>

        </b>


        <form method="POST" action="">
            <input type="hidden" name="action" value="login"/>



            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_username">Naudotojo vardas</label>
                <input class="mdl-textfield__input" type="text" id="textfield_username" name="username"/>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                <label class="mdl-textfield__label mdl-color-text--grey" for="textfield_password">Slaptažodis</label>
                <input class="mdl-textfield__input" type="password" id="textfield_password" name="password"/>

            </div>

            <div class="mdl-cell mdl-cell--12-col send-button" align="center">

                <button type="submit"  class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored mdl-color--grey">
                    Prisijungti
                </button>
            </div>

        </form>
    </div>
</div>
</div>
</body>
</html>
                </section>
        <!--  !!! patartina failo apacioje   -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- Material Design Lite JavaScript -->
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
<script type="text/javascript" src="../libs/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/login.js" charset="utf-8"> </script>
    </body>
</html>
