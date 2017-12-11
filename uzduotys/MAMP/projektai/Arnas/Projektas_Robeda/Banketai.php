<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo1</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/header.css">

        <link rel="stylesheet" href="./css/BanketaiVirsus.css">
        <link rel="stylesheet" href="./css/BanketaiKalendorius.css">
        <link rel="stylesheet" href="./css/BanketaiNuotraukos.css">
        <link rel="stylesheet" href="./css/footer.css">

    </head>
    <body >
        <!--Includinam navihacija ir baketo puslapio virsu-->
        <?php
        require_once('./php/headerBanketai.php');
        ?>
            <!--Pradedam main daly-->
             <section class="mainSection container-flued">
                 <!--Icludinam kalendoriu-->
                 <?php
                 include('./php/BanketaiNuotraukos.php');
                 include('./php/calender.php');
                  ?>
                 <div class="container calender">
                     <div class="row dateName justify-content-center ">
                         <div class="col-3">
                            <a href="?ym=<?php echo $prev?>"><div class="arrowL"></div></a>
                         </div>
                         <div class="col-3 text-center">
                             <h3><?php echo $ym?></h3>
                         </div>
                         <div class="col-3">
                              <a href="?ym=<?php echo $next?>"><div class="arrowR"></div></a>
                         </div>
                     </div>
                     <div class="clearfix"> </div>
                     <div class="kalendorius">
                       <?php
                       // print_r($date_info = getdate(strtotime(mktime(0,0,0,12,1,2017))));
                       // echo "<br/>";
                       // $datee_info = getdate(mktime(0,0,0,12,1,2017));
                       // print_r($datee_info);
                       //  echo "<br/>";
                       //  echo $datee_info['wday'];
                       //  echo "<br/>";
                       $kalendorius = new Calender($year,$menuo);
                       $kalendorius->show(1);
                       //$kalendorius->getStatusas();
                         ?>
                        <!-- <table class="table table-bordered text-center">
                            <tr>
                                <th>Pirmadienis</th>
                                <th>Antradienis</th>
                                <th>Treciadienis</th>
                                <th>Ketvirtiadienis</th>
                                <th>Penktadienis</th>
                                <th>Sestadienis</th>
                                <th>Sekmadienis</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> -->
                        </table>

                  </div>
                </div>

                <?php include('./php/BanketaiNuotraukos1.php'); ?>
                <div class="container calender">
                    <div class="row dateName justify-content-center ">
                        <div class="col-3">
                           <a href="?ym1=<?php echo $prev1?>"><div class="arrowL"></div></a>
                        </div>
                        <div class="col-3 text-center">
                            <h3><?php echo $ym1?></h3>
                        </div>
                        <div class="col-3">
                             <a href="?ym1=<?php echo $next1?>"><div class="arrowR"></div></a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="kalendorius">
                      <?php

                      $kalendorius1 = new Calender($year1,$menuo1);
                      $kalendorius1->show(2);
                        ?>
                 </div>
               </div>
               <?php require_once('./php/footer.php'); ?>
             </section>
        <!--  !!! patartina failo apacioje   -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="./libs/jquery-3.2.1.min.js">

</script>
<script type="text/javascript" src="./js/main.js"> </script>
<script type="text/javascript" src="./js/Banketai.js"> </script>
    </body>
</html>
