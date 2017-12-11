<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo1</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/loginNext.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    </head>
    <body >
                <?php
                      define('DB_HOST','localhost');
                      define('DB_USER',"root");
                      define('DB_PASS',"root");
                      define('DB_NAME',"robeda_meniu");

                      if(isset($_POST['select1'])||isset($_POST['pavadinimas'])||isset($_POST['aprasymas'])||isset($_POST['select2'])||isset($_POST['kaina'])){


                          $diena = $_POST['select1'];
                          $pavadinimas = $_POST['pavadinimas'];
                          $aprasymas = $_POST['aprasymas'];
                          $grupe = $_POST['select2'];
                          $kaina = $_POST['kaina'];


                      }
                      else{
                        $diena = "";
                        $pavadinimas = "";
                        $aprasymas = "";
                        $grupe = "";
                        $kaina = "";
                      }
                      //echo $diena." ".$pavadinimas." ".$aprasymas." ".$grupe." ".$kaina. "<br/>";

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
                      function idetipatiekala($diena,$pavadinimas,$aprasymas,$grupe,$kaina){
                          if($diena == "" || $pavadinimas == "" || $aprasymas == "" || $grupe == "" || $kaina == ""){
                            echo "<div class='alert alert-warning center' role='alert'>
                                        Nusuvedte visu duomenu!!!
                                   </div>";
                                   //return false;
                          }
                          else{
                              $salyga = "INSERT INTO patiekalas VALUES ('','$pavadinimas','$aprasymas',$kaina,'$grupe')";
                              mysqli_query(getCon(),$salyga);
                              if(!mysqli_query(getCon(),$salyga)){
                              echo "fail";
                              //return false;
                              }
                              $salyga1 = "SELECT id_p FROM patiekalas ORDER BY id_p DESC LIMIT 1;";
                              $result1 = mysqli_query(getCon(),$salyga1);
                              if(!$result1){
                                echo "fail1";
                                //return false;
                              }
                              $x = mysqli_fetch_assoc($result1);
                              $kint = implode("",$x);
                              $kint = (int)$kint;

                              $salyga3="INSERT INTO dienospietus
                              VALUES ('',$kint,$diena)";
                              mysqli_query(getCon(),$salyga3);
                              if(!mysqli_query(getCon(),$salyga3)){
                                echo "fail2";
                                //return false;
                              }
                              echo "<div class='alert alert-success center' role='alert'>
                              Duomenys irasyti </div>";
                              }
                          }

                          if(isset($_GET['data'])&&isset($_GET['name'])&&isset($_GET['pastas'])&&isset($_GET['select3'])){
                            $data = $_GET['data'];
                            $name = $_GET['name'];
                            $pastas = $_GET['pastas'];
                            $sale = $_GET['select3'];
                            echo $diena." ".$pavadinimas." ".$aprasymas." ".$grupe." ".$kaina. "<br/>";
                          }else{
                            $data = "";
                            $name = "";
                            $pastas = "";
                            $sale = "";
                          }
                          $data2=date('Ymd',strtotime($data));
                        function idetiData($data2,$name,$pastas,$sale){
                            if($data2==""||$name==""||$pastas==""||$sale==""){
                              echo "<div class='alert alert-warning center' role='alert'>
                                          Nusuvedte visu duomenu!!!
                                     </div>";

                            }
                            else{
                              $salyga="INSERT INTO diena
                              VALUES ('',$data2,1,'$name','$pastas',$sale,868724564)";
                              mysqli_query(getCon(),$salyga);
                              if(!mysqli_query(getCon(),$salyga)){
                                //echo"0";

                              }
                              echo "<div class='alert alert-success center' role='alert'>
                              Duomenys irasyti </div>";
                            }
                        }



                 ?>
                 <div class="container">
                    <div class="row justify-content-center aaa">
                        <div class="col-4 dydis bg-light">
                            <a href="#111"> <h2>Prideti patiekala </h2> </a>
                        </div>
                        <div class="col-4 dydis bg-light">
                            <a href="#112"> <h2>Užregistruoti salę</h2> </a>
                        </div>
                    </div>
                 </div>
                <section class="container bg-light pt-5 pb-5 " id="111">
                      <div class="row justify-content-center">
                        <div class="col-5">

                            <form class="form-control" action="" method="post">

                              <label for="Select1"><b>Pasirinkite diena</b></label>
                              <select class="form-control" name="select1">
                                    <option value="1">Pirmadienis</option>
                                    <option value="2">Antradienis</option>
                                    <option value="3">Trečiadienis</option>
                                    <option value="4">Ketvirtadienis</option>
                                    <option value="5">Penktadienis</option>
                              </select>

                              <label for="Select1"><b>Pavadinimas</b></label>
                              <input class="form-control" type="text" placeholder="Default input" name="pavadinimas">
                              <label for="Select1"><b>Aprašymas</b></label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aprasymas"></textarea>

                              <label for="Select1"><b>Pasirinkite kategorija</b></label>
                              <select class="form-control" name="select2">
                                    <option >Karstieji</option>
                                    <option >Saltieji</option>
                                    <option >Gerimai</option>
                                    <option >Sriubos</option>
                                    <option >Salotos</option>
                              </select>

                              <label for="Select1"><b>Kaina</b></label>
                              <input class="form-control" type="number" placeholder="Default input" name="kaina">



                              <button type="submit" class="btn btn-secondary">Išsaugoti</button>

                            </form>
                        </div>
                        <div class="col-5 position-relative">
                          <?php idetipatiekala($diena,$pavadinimas,$aprasymas,$grupe,$kaina); ?>
                        </div>
                      </div>
                </section>
                <section class="container bg-light pt-5 pb-5 " id="112">
                      <div class="row justify-content-center">
                        <div class="col-5">
                                <form class="form-control" action="" method="get">

                                  <label for="Select1"><b>Data</b></label>
                                  <input class="form-control" type="date" placeholder="Default input" name="data">

                                  <label for="Select1"><b>Vardas</b></label>
                                  <input class="form-control" type="text" placeholder="Default input" name="name">

                                  <label for="Select1"><b>EL. paštas</b></label>
                                  <input class="form-control" type="email" placeholder="Default input" name="pastas">

                                  <label for="Select1"><b>Pasirinkite sale</b></label>
                                  <select class="form-control" name="select3">
                                        <option value="1">Kavines sale</option>
                                        <option value="2">Banketu sale</option>
                                  </select>

                                  <button type="submit" class="btn btn-secondary">Išsaugoti</button>

                                </form>
                        </div>
                        <div class="col-5">
                            <?php idetiData($data2,$name,$pastas,$sale); ?>
                        </div>
                      </div>
                  </section>





        <!--  !!! patartina failo apacioje   -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="../libs/jquery-3.2.1.min.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script type="text/javascript" src="./js/main.js" charset="utf-8"> </script>
<script type="text/javascript" src="../js/loginNext.js"> </script>
    </body>
</html>
