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
            <h1>Isijunk konsole</h1>

        </div>
            <section class="container">
                <h1 class="text-center">Meniu</h1>
                <div class="row">
                    <div class="col-2 patiekaloTipas text-center">
                        <h5 class="bg-info">Specialus pasiulmai</h5>
                        <h5 class="bg-info">Karstieji</h5>
                        <h5 class="bg-info">Saltieji</h5>
                        <h5 class="bg-info">Salotos</h5>
                        <h5 class="bg-info">Sriubos</h5>
                        <h5 class="bg-info">Karstieji gerimai</h5>
                        <h5 class="bg-info">Gaivieji gerimai</h5>
                        <h5 class="bg-info">ALkocholiniai gerimai</h5>
                    </div>
                    <div class="col-10 bg-success">

                    </div>
                </div>
            </section>

            <?php
                define('HOST','localhost');
                define('DB_NAME','robeda');
                define('DB_USER','root');
                define('DB_PASS','root');

                $connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);
                if($connection):
                    echo"Prisijungem prie DB sekmingai";
                else:
                    die("Fatal Error: prie DB nepavyko prisijungti".mysqli_connect_error());
                endif;



                    function createPatient(){
                        $vardas= "Tomas";
                        $pavarde="Tomaitis";
                        $idd = 5;
                        $mano_SQL = "INSERT INTO patients VALUES('','$varas','$pavarde',$idd;)";
                        $result = mysqli_query($connection, $mano_SQL);
                            if($result){
                                echo "Duomenys ideti sekmingai";
                            }else {
                                echo "Nepavyko ivesti duomenu".mysqli_error($connection);
                            }{ }}

                        function getPatients($x){
                            $mano = "SELECT * FROM patients WHERE idpatients=$x;";
                            $connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);
                            $result = mysqli_query($connection, $mano);
                            if($result){
                                $result=mysqli_fetch_assoc($result);
                                return $result;
                                echo "Duomenys paimti sekmingai";
                            }else {
                                echo "Nepavyko paiimti duomenu duomenu".mysqli_error($connection);
                            }
                        }

                        $x= getPatients(5);
                        print_r($x);
             ?>


        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
