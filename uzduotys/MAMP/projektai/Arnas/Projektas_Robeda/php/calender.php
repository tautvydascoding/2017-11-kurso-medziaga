<?php
define('DB_HOST','localhost');
define('DB_USER',"root");
define('DB_PASS',"root");
define('DB_NAME',"robeda_meniu");
// pasiimam pasirinkta data, metus, menesi,, diena
    if(isset($_GET['ym'])){
      $ym=$_GET['ym'];
    }
    else{
      $ym=date('Y-m');
    }

    if(isset($_GET['ym1'])){
      $ym1=$_GET['ym1'];
    }
    else{
      $ym1=date('Y-m');
    }

    $timestamp = strtotime($ym,"-01");
    if (!$timestamp){
       $timestamp= time();
       //echo "$timestamp <br/>";
    }
    $timestamp1 = strtotime($ym1,"-01");
    if (!$timestamp1){
       $timestamp1= time();
       //echo "$timestamp <br/>";
    }

    $today= date('Y-m-d',time());
    //echo "$today <br/>";
    $next= date('Y-m',mktime(0,0,0,date('m',$timestamp)+1,1,date('Y',$timestamp)));
    $prev= date('Y-m',mktime(0,0,0,date('m',$timestamp)-1,1,date('Y',$timestamp)));

    $next1= date('Y-m',mktime(0,0,0,date('m',$timestamp1)+1,1,date('Y',$timestamp1)));
    $prev1= date('Y-m',mktime(0,0,0,date('m',$timestamp1)-1,1,date('Y',$timestamp1)));

    $y = explode('-',$ym);
    $yy = explode('-',$ym1);

    $year = (int)$y[0];
    $menuo = (int)$y[1];

    $year1 = (int)$yy[0];
    $menuo1 = (int)$yy[1];
    // echo "<br/>";
    // echo "$year $menuo";
    // if($year==2018){
    //   echo "velioooooooooooooooooooo";
    // }

// Susikuriam klase Calaneder
   class Calender{
        //private $today;
        private $year;
        private $mounth;
        private $num_days;
        private $date_info;
        private $day_of_weak;
        private $days_of_week;
// prisikirima visas reiksmes
        public function __construct($year, $mounth, $days_of_weak=array("Pirmadienis","Antradienis","Treciadienis","Ketvirtadienis","Penktadienis","Sestedienis","Sekmadienis")){
            $this->year = $year;
            $this->mounth = $mounth;
            $this->days_of_weak = $days_of_weak;
            $this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->mounth, $this->year);
            $this->date_info = getdate(mktime(0,0,0,$this->mounth,1,$this->year));
              //$ths->date_info = getdate(mktime(0,0,0,12,1,2017));
              if( $this->date_info['wday'] == 0){
                  $this->day_of_weak = 6;
              }
              else{
                  $this->day_of_weak = $this->date_info['wday']-1;
              }
          }
// Spaudiname kalendoriu
        public function show($e){
            $output = "<table class='table table-bordered text-center'>";
            $output .= "<tr>";
            foreach ($this->days_of_weak as $value) {
                $output .="<th>".$value."</th>";
            }
            $output .="</tr><tr>";
            if($this->day_of_weak > 0){
              $dd = $this->day_of_weak;
                $output .="<td colspan='".$dd."'></td>";
            }
            $diena = 1;
            while($diena <= $this->num_days){
                if($this->day_of_weak == 7){
                  $output .="</tr><tr>";
                  $this->day_of_weak=0;
                }
            $dabData = date('Ymd',mktime(0,0,0,$this->mounth,$diena,$this->year));
            if($this->getStatusas($dabData,$e)==1){
              $output .="<td class='bg-danger'>".$diena."</td>";
            }
            else{
              $output .="<td>".$diena."</td>";
            }
            //echo $dabData."<br/>";
            //$output .="<td>".$diena."</td>";
            $diena++;
            $this->day_of_weak++;
            }
            if($this->day_of_weak != 7){
              $likus_sav = 7 - $this->day_of_weak;
              $output .="<td colspan='".$likus_sav."'></td>";

            }
            $output .="</tr></table>";

            echo $output;
        }
        public function aa(){
          echo $this->year;
          echo "<br/>";
          echo $this->day_of_weak."aaaaaaaaaaaaaaa" ;
          echo "<br/>";
          echo $this->date_info['wday'];
          echo "<br/>";
          print_r($this->date_info);
        }
        // Funkcija leidzianti prisijungti prie DB
        function getCon(){
        $connection = mysqli_connect(DB_HOST, DB_USER ,DB_PASS, DB_NAME);
        mysqli_query($connection,"SET CHARACTER SET 'utf8'");
        if($connection==false):
        //  echo"Nepavyko prisijungti prie DB";
        else:
        //  echo"Prisijungeme prie DB"."<br/>";
        endif;
        return  $connection;
        }
        function getStatusas($x,$e){
            $salyga="SELECT statusas
            FROM diena INNER JOIN sale
            ON diena.id_sale = sale.id_sale
            WHERE data_dienos = $x  AND sale.id_sale=$e;";
            // Kaip klases viduja esnacioja funkcijoje bandai issikviest kita klases viduje
            //esancia funkcija labai svatbu yra uzdeto zodi $this pries funkcija !!!
           $result = mysqli_query($this->getCon(),$salyga);
          if(!$result){
            echo "Salyga ivesta neteisyklingai";
          }
            $kint = mysqli_fetch_assoc($result);
            //$kintt = implode("",$kint);
            $kinttt = (int)$kint;
            return $kinttt;



        }




    }


    //
    // // prisijungimas prie db
    // define('HOST','localhost');
    // define('DB_NAME','banetai');
    // define('DB_USER','root');
    // define('DB_PASS','root');
    //
    // $connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);
    // if($connection):
    //     echo"Prisijungem prie DB sekmingai";
    // else:
    //     die("Fatal Error: prie DB nepavyko prisijungti".mysqli_connect_error());
    // endif;
    //
    //
    //
    //         function getDates(){
    //             $mano = "SELECT * FROM banketas WHERE id_sale=1;";
    //             $ska = "SELECT COUNT(id_sale) FROM banketas WHERE id_sale=1;";
    //             $connection = mysqli_connect( HOST, DB_USER, DB_PASS, DB_NAME);
    //
    //             $countSka = mysqli_query($connection, $ska);
    //
    //             //echo "$countSka";
    //
    //             if($countSka){
    //                 $countSka=mysqli_fetch_assoc($countSka);
    //             //    $aaa=$countSka[COUNT(id_sale)];
    //                 $countSkaS=implode("",$countSka);
    //                 $countSkaI=(int)$countSkaS;
    //                 //return $countSkaI;
    //             }
    //             $mx = array();
    //             $mx[0]=[];
    //             for($i=0;$i<$countSkaI;$i++){
    //                     $result = mysqli_query($connection, $mano);
    //                     if($result){
    //
    //                 $mx[$i]=$result=mysqli_fetch_assoc($result);
    //             }else {
    //                 echo "Nepavyko paiimti duomenu duomenu".mysqli_error($connection);
    //             }}
    //             return $mx;
                    // if($result){
                    //     $result=mysqli_fetch_assoc($result);
                    //
                    //     //return $result;
                    //     echo "Duomenys paimti sekmingai";
                    // }
                    // else{
                    //     echo "Nepavyko paiimti duomenu duomenu".mysqli_error($connection);
                    // }


            //    }

          //  $x= getDates();
          //  print_r($x);
            // echo "<br/>";
            // echo "<h2> $x </h2>";


?>
