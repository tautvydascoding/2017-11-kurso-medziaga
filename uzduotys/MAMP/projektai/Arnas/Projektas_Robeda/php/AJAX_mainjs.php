<?php
define('DB_HOST','localhost');
define('DB_USER',"root");
define('DB_PASS',"root");
define('DB_NAME',"robeda_meniu");
// Funkcija leidzianti prisijungti prie DB
    function getConnection(){
        $connection = mysqli_connect(DB_HOST, DB_USER ,DB_PASS, DB_NAME);
        mysqli_query($connection,"SET CHARACTER SET 'utf8'");
        mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
        if($connection==false):
          //  echo"Nepavyko prisijungti prie DB";
        else:
          //  echo"Prisijungeme prie DB"."<br/>";
        endif;
        return  $connection;
      };
//getConnection()
// --------------------------------------------------------
function getDienas(){
      // paziurima kiek yra irasu Db
      $salyga="SELECT COUNT(diena) FROM pietus";
      $result = mysqli_query(getConnection(),$salyga);
      if(!$result){
        echo "Neradome jokiu duomenu";
      }
      $y = mysqli_fetch_assoc($result);
      $y=implode("",$y);
      $y=(int)$y;
      //echo $y;
      // ------------------------------------
      $salyga1="SELECT diena FROM pietus";
      $result1=mysqli_query(getConnection(),$salyga1);
      if(!$result1){
        echo "Neradome jokiu duomenu";
      }

      $array= array();
        for ($i=0; $i < $y; $i++) {
          $kint = mysqli_fetch_assoc($result1);
          $kint= implode("",$kint);
          $array[$i]=$kint;
        }
     return $array;
  };
  function getNr($kint){
    $salyga1 = "SELECT COUNT(patiekalas.id_p)
                FROM dienosPietus INNER JOIN patiekalas
                ON dienospietus.id_p=patiekalas.id_p
                WHERE id_pietus = $kint;";
                $results=mysqli_query(getConnection(),$salyga1);
                if(!$salyga1):echo"Salyga nesuveike";endif;
                $y=mysqli_fetch_assoc($results);
                $y=implode("",$y);
                $y=(int)$y;
                return $y;
  }
//print_r(getDienas());
//$uid="";
function getDienosPatiekalai(){
    if(isset($_POST['dienos']))
    {
        $uid = $_POST['dienos'];
        //echo $uid;
      $x = getDienas();
      //print_r($x); echo"$ilgis <br/>";
      for($i=0; $i<count($x);$i++) {
        //echo $i;
      //  echo "<br>";
        if($uid == $x[$i]){
          //echo"Praeina";
          $kint= $i+1;
          $salyga = "SELECT patiekalas.pavadinimas, patiekalas.aprasymas, patiekalas.kaina
                      FROM dienosPietus INNER JOIN patiekalas
                      ON dienospietus.id_p=patiekalas.id_p
                      WHERE id_pietus = $kint;";

          $results=mysqli_query(getConnection(),$salyga);
          $mas = array();
          //$mas[]=array();
          for ($j=0;$j<getNr($kint);$j++){
            if(!$salyga):echo"Salyga nesuveike";endif;
            $arr=mysqli_fetch_assoc($results);
            $mas[$j]=$arr;
          //  $arr = array_filter($arr);
            // if(count($arr)==0){
            //   //echo"mas";
            // }
          }


        //   if(!$salyga):echo"Salyga nesuveike";endif;
        //   $arr=mysqli_fetch_assoc($results);
        // //  $arr = array_filter($arr);
          // if(count($arr)==0){
          //   //echo"mas";
          // }
          return $mas;
          break;}
      }
    }
}
//print_r(getDienosPatiekalai());
echo json_encode(getDienosPatiekalai());

// -----------------------------------------------------
//header("Content-Type: application/xml; charset=utf-8");
//$pg1=getDienas("pirmadienis");
//utf8_encode(echo json_encode($pg1));
//print_r($pg1);
//echo json_encode($pg1);

 ?>
