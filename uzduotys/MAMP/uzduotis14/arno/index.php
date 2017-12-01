<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo1</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/header.css">
    </head>
    <body >
        <div class="container-fluid">
            <h1>Forma Jumas</h1>
        </div>
        <!--email siuntimo kurimas-->
        <div class="container">
            <div class="w-50">
                <form class="form form-group bg-info" action="./index.php" method="get">
                    <label for="name">Vardas</label>
                    <input type="text" name="name" value="" class="form-control">

                    <label for="email">Email</label>
                    <input type="email" name="email" value="" class="form-control" required>

                    <label for="aaa">Antraste</label>
                    <input type="text" name="aaa" value="" class="form-control">

                    <label for="klausimas">Klausimas</label>
                    <textarea name="klausimas" rows="8" cols="80" class="form-control" required></textarea>

                    <input type="submit" name="" value="Edit" class="btn btn-success mt-3">
                </form>
            </div>

        </div>


        <?php
        $text = "few words";
        $binary = "\x09Example string \x0A";
        $hello = "Hello world!!!";
        var_dump($text,$binary,$hello);//ispausdina objekta
        echo "<br/>";
        trim($text); //pasalina tarpus pries ir uz paduoto stringo

        $array3 = array();
        $i = 0;
        //open file
        $filasText = fopen('./text.txt','r') or die("Tokio failo \"text.txt\" ne baba");
        //feof komanda grazina failo pabaiga, true reiksme
        while (!feof($filasText)) {
            //echo "radau ne failo pabaiga ";
            //echo fgets($filasText)."<br/>";
            $eilute = fgets($filasText);
                if($eilute != ""):
            //echo "<br/>";
            $tem = explode(" : ",$eilute);// masyvas
            //print_r($tem);
            //echo "<br/>";
            $array[$i]=array();
            $array3[$i]["name"]=$tem[0];
            $array3[$i]["number"]=$tem[1];
            $array3[$i]["prize"]=$tem[2];
            $i++;
        endif;
            //break;

            // $array[$kint]=fgets($filasText);
            // $kint++;
        }
        fclose($filasText);
        print_r($array3);
        echo "<br/>";


         ?>














        <!--  !!! patartina failo apacioje   -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="./libs/jquery-3.2.1.min.js">

</script>
<script type="text/javascript" src="./js/main.js"> </script>
<script type="text/javascript" src="./js/carusel.js"> </script>
    </body>
</html>
