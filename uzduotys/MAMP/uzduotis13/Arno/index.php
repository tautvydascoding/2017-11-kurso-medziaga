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
            <h1>
                <?php   echo "php mayvai";    ?>
            </h1>

        </div>

        <?php
            $masyvas = array("Tomas","Tomulis",1956);
            $lastname = $masyvas[1];
            $name= $masyvas[0];
            $age = $masyvas[2];
            $num = 5.45454;


            echo "$name $lastname $age <br/>";
            echo "<h2> $name </h2>";
            echo "<h3> $lastname </h3>";
            echo "<b> $age </b> <br/>";

            printf("vardas: %s pavarde: %s metai: %d skaicius: %.2f",$name,$lastname,$age,$num);

            if($age > 1970):   echo"<h1> $name </h1>";
            else:   echo"<h1> $lastname </h1>";
            endif;

            $kk = ($age > 1940) ? $name: $lastname;
            echo "$kk <br/>";

            $arr = array('name'=>"Tomas",'lastname'=>"Kisius",'age'=>1994);
            echo $arr['name'] . "<br/>";
            $arr['name'] = "Jonas";
            echo $arr['name'] . "<br/>";

            $vardas = "arnas";
            $vardas = ucFirst($vardas); //grazina stringa su pirma raide didziaja
            echo $vardas . "<br/>";

            $txt = "lape snape ejo per lietu";
            echo strtolower($txt) . "<br/>";
            echo strtoupper($txt) . "<br/>";

            $arr['age']= 2001;
            echo $arr['age'] . "<br/>";

            // isspausdina vis masyva
            print_r($arr);
            echo "<br/>";
            print_r($masyvas);
            echo "<br/>";

            // tiesiog ima kiekviena masyvo reiksme ir priskiria ja $value
            foreach ($arr as  $value) {
                echo $value . " ";
            }
            echo "<br/>";
            foreach ($arr as $key => $x) {
                echo $key . " ". $x. " "; //$key isveda stalciu, $x stalciaus reiksme
                if($key === "lastname"):break; endif;
            }
            echo "<br/>";

            $meniu = array("home", "about","gallery","contact", "blog");
            foreach ($meniu as $value) {
                echo "<h2> $value </h2>";
            }

            $dogNames = array("Bobas", "Roonis", "Leida","Aceas","Brisius","Markas");
            ?>

            <div class="row text-center">
                <?php
                    foreach ($dogNames as $value) {
                        if($value == "Bobas" || $value == "Brisius"):
                        echo " <div class='col-4'> <h1> $value </h1> <img width='100px' height='100px' src='./images1.jpg'/> </div>";
                        elseif($value == "Roonis" || $value=="Aceas"):
                        echo " <div class='col-4'> <h1> $value </h1> <img width='100px' height='100px' src='./images2.jpg'/> </div>";
                        else:
                        echo " <div class='col-4'> <h1> $value </h1> <img width='100px' height='100px' src='./images3.jpg'/> </div>";
                        endif;
                    }
                 ?>
            </div>
            <?php
                $preke = array(
                    'antraste'=>"gyvunai",'ImgP'=>"Suo",  'prekesA'=>"preke yra gera", 'kaina'=>100
                );
                $preke2 = array(
                    'antraste'=>"zmones",'ImgP'=>"Saulius",  'prekesA'=>"preke yra gera", 'kaina'=>"begalybe"
                );
                $visosPrekes = array();
                $visosPrekes[0] = $preke;
                $visosPrekes[1] = $preke2;
                $a = count($visosPrekes);
                //$a=1;
                echo $a;
                for($i=0; $i<$a;$i++){
                    for ($j=0; $j <3 ; $j++) {
                        echo $visosPrekes[$i]['antraste']. " ".$visosPrekes[$i]['ImgP']. " ".$visosPrekes[$i]['prekesA']. " ".$visosPrekes[$i]['kaina'] ;
                    }

                        echo "<br/>";

                }

                //echo $file;
                //$file1 = fopen('test.txt',"r");
                $file2='test.txt';
                //file_put_contents($file2, "labuka", FILE_APPEND);
                //$file2 = file_get_contents('test.txt');


                // for ($i=0; $i < 2; $i++) {
                //     file_put_contents($file2, " Sveikas ", FILE_APPEND);
                // }
                $file2 = file_get_contents('test.txt');


                // echo $file2."<br/>";
                $aa = explode(";",$file2);

                $bb=array_filter($aa, create_function('$value', 'return $value !== "";'));
                $array = array();
                foreach ($bb as $value) {
                    echo $value. "<br/>";
                  }
                  foreach ($bb as $i=> $value) {
                      $strb = $value;
                      $mas = explode(' ',$strb);
                      // print_r($mas);
                      // echo "<br/>";
                      foreach ($mas as $j=>$value1) {
                          $array[$i][$j]=$mas[$j];
                      }
                  }


                  for ($k=0;$k<4;$k++) {
                      for ($kk=0;$kk<4;$kk++) {
                          echo $array[$k][$kk]." ";
                      }
                      echo "<br/>";
                  }
                  print_r($bb);
                  echo "<br/>";
                  print_r($array);
                echo "<br/>";
                // print_r($array);
                    // function remove_empty($aa) {
                    //     return array_filter($aa, '');
                    // }
                    // $bb = array_filter($aa, '');
                    // print_r($bb);










                ?>


























        <!--  !!! patartina failo apacioje   -->

        <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
        <!-- !!! mano js failas visada zemiau -->
        <script type="text/javascript" src="./main.js?ver=1.0.0"> </script>

    </body>
</html>
