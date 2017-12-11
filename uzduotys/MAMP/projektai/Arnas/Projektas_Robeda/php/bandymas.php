<?php
define('DB_HOST','localhost');
define('DB_USER',"root");
define('DB_PASS',"root");
define('DB_NAME',"robeda_meniu");
function a(){
  //var_dump( $_POST );
  //var_export($_POST);
  if(isset($_POST['grupe'])){
    $uid = $_POST['grupe'];
    //print($uid);
  echo json_encode(getGrupePatiekalus($uid));
  }
}
a();



// Funkcija leidzianti prisijungti prie DB----------------------------
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
// --------------------------------------------------------------------
      function getGrupePatiekalus($x){
            // paziurima kiek yra irasu Db
            $salyga="SELECT pavadinimas, aprasymas, kaina
                    FROM patiekalas
                    WHERE grupe='$x';";
            $salyga1="SELECT COUNT(id_p)
                      FROM patiekalas
                      WHERE grupe='$x';";
            $result = mysqli_query(getConnection(),$salyga);
            $result1 = mysqli_query(getConnection(),$salyga1);
            if(!$result1){
              echo "Neradome jokiu duomenu";
            }
            $kintGrupe = mysqli_fetch_assoc($result1);
            $skc = implode("",$kintGrupe);
            $skc = (int)$skc;
            if(!$result){
              echo "Neradome jokiu duomenu";
            }
            $mas=array();
            for ($j=0;$j<$skc;$j++){
              $y = mysqli_fetch_assoc($result);
              $mas[$j]= $y;
            }
            return $mas;
          }




 ?>
