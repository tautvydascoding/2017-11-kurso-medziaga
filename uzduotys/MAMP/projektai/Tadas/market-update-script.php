<?php
//NOTE !!!
//MAMP/php/php.ini faile atkomentavau extension=php_mysqli.dll

require_once("connect-mysql.php");

FinalMarketUpdate($connection, 12);

//Funkcija grazina masyva uzpildyta crypto valiutomis.
//Masyvo stalcius - valiutos ID !!!
function GetAllCurrenciesInfo($conn)
{
  $mySql = "SELECT * FROM currencies";
  $result = mysqli_query($conn, $mySql);
  if($result):
    if(mysqli_num_rows($result) > 0):
      $i = 1;
      while($row = mysqli_fetch_assoc($result)) {
        $retResult[$i] = $row;
        $i++;
      }
    endif;
  endif;

  return $retResult;
}


function CheckCurrencyUsage($conn, $curr_id)
{
  $points = 0;
  $allCurrencies = GetAllCurrenciesInfo($conn);
  $thisCurrency = $allCurrencies[$curr_id];
  $sold = $thisCurrency['users_sold'];
  $bought = $thisCurrency['users_bought'];

  //Jeigu daugiau kaip 5k
  if(($sold + $bought) > 5000):
    //IF SOLD
    if($sold > ($bought * 2)): $points = $points-8; //Jeigu pardave 2 kartus daugiau negu pirko, -5 taskai
    elseif($sold > ($bought * 1.5)): $points = $points-7; //Jeigu pardave 1.5 karto daugiau negu pirko, -4 taskai
    elseif($sold > $bought): $points = $points-6; endif; //Jeigu pardave daugiau nei pirko, -3 taskas
    //IF BOUGHT
    if($bought > ($sold * 2)): $points = $points+8;
    elseif($bought > ($sold * 1.5)): $points = $points+7;
    elseif($bought > $sold): $points = $points+6; endif;

  //Jeigu daugiau kaip 2.5k
  elseif(($sold + $bought) > 2500):
    //IF SOLD
    if($sold > ($bought * 2)): $points = $points-7; //Jeigu pardave 2 kartus daugiau negu pirko, -5 taskai
    elseif($sold > ($bought * 1.5)): $points = $points-6; //Jeigu pardave 1.5 karto daugiau negu pirko, -4 taskai
    elseif($sold > $bought): $points = $points-5; endif; //Jeigu pardave daugiau nei pirko, -3 taskas
    //IF BOUGHT
    if($bought > ($sold * 2)): $points = $points+7;
    elseif($bought > ($sold * 1.5)): $points = $points+6;
    elseif($bought > $sold): $points = $points+5; endif;

  //Jeigu daugiau kaip 1k
  elseif(($sold + $bought) > 1000):
    //IF SOLD
    if($sold > ($bought * 2)): $points = $points-6; //Jeigu pardave 2 kartus daugiau negu pirko, -5 taskai
    elseif($sold > ($bought * 1.5)): $points = $points-5; //Jeigu pardave 1.5 karto daugiau negu pirko, -4 taskai
    elseif($sold > $bought): $points = $points-4; endif; //Jeigu pardave daugiau nei pirko, -3 taskas
    //IF BOUGHT
    if($bought > ($sold * 2)): $points = $points+6;
    elseif($bought > ($sold * 1.5)): $points = $points+5;
    elseif($bought > $sold): $points = $points+4; endif;

  //Jeigu daugiau kaip 500
  elseif(($sold + $bought) > 500):
    //IF SOLD
    if($sold > ($bought * 2)): $points = $points-5; //Jeigu pardave 2 kartus daugiau negu pirko, -5 taskai
    elseif($sold > ($bought * 1.5)): $points = $points-4; //Jeigu pardave 1.5 karto daugiau negu pirko, -4 taskai
    elseif($sold > $bought): $points = $points-3; endif; //Jeigu pardave daugiau nei pirko, -3 taskas
    //IF BOUGHT
    if($bought > ($sold * 2)): $points = $points+5;
    elseif($bought > ($sold * 1.5)): $points = $points+4;
    elseif($bought > $sold): $points = $points+3; endif;

  //Jeigu daugiau kaip 100
  elseif(($sold + $bought) > 100):
    if($sold > ($bought * 2)): $points = $points-4; //Jeigu pardave 2 kartus daugiau negu pirko, -5 taskai
    elseif($sold > ($bought * 1.5)): $points = $points-3; //Jeigu pardave 1.5 karto daugiau negu pirko, -4 taskai
    elseif($sold > $bought): $points = $points-2; endif; //Jeigu pardave daugiau nei pirko, -3 taskas
    //IF BOUGHT
    if($bought > ($sold * 2)): $points = $points+4;
    elseif($bought > ($sold * 1.5)): $points = $points+3;
    elseif($bought > $sold): $points = $points+2; endif;

  //Jeigu daugiau kaip 50
  elseif(($sold + $bought) > 50):
    if($sold > ($bought * 2)): $points = $points-3; //Jeigu pardave 2 kartus daugiau negu pirko, -5 taskai
    elseif($sold > ($bought * 1.5)): $points = $points-2; //Jeigu pardave 1.5 karto daugiau negu pirko, -4 taskai
    elseif($sold > $bought): $points = $points-1; endif; //Jeigu pardave daugiau nei pirko, -3 taskas
    //IF BOUGHT
    if($bought > ($sold * 2)): $points = $points+3;
    elseif($bought > ($sold * 1.5)): $points = $points+2;
    elseif($bought > $sold): $points = $points+1; endif;

  endif;

  return $points;
}

//Funkcija grazina nurodytos valiutos paskutine kaina
function GetCurrencyLastPrice($conn, $curr_id)
{
  $mySql = "SELECT lastPrice FROM currencies WHERE id=$curr_id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $result = mysqli_fetch_assoc($result);
    $price = $result['lastPrice'];
  endif;

  return $price;
}

//funkcija atnaujina krypto valiutos istorija
function UpdateCurrencyHistory($conn, $curr_id, $lastPrice)
{
  $hour = date("H");
  $dbVar = "hour".$hour;
  $mySql = "UPDATE currhistory SET $dbVar=$lastPrice WHERE id=$curr_id";
  mysqli_query($conn, $mySql);
}

//Funkcija atnaujina duomenis apie valiutos 24H low ir high kainas
function UpdateCurrencyLowAndHigh($conn, $curr_id)
{
  $mySql = "SELECT * FROM currhistory WHERE id=$curr_id";
  $result = mysqli_query($conn, $mySql);

  if($result):
    $row = mysqli_fetch_assoc($result);
  endif;
  array_shift($row);

  $low = min($row);
  $high = max($row);

  $mySql = "UPDATE currencies SET low=$low, high=$high WHERE id=$curr_id";
  mysqli_query($conn, $mySql);
}

function FinalMarketUpdate($conn, $total_currencies)
{
  for ($i=1; $i < $total_currencies+1; $i++) {
    $change = CheckCurrencyUsage($conn, $i);
    $priceNow = GetCurrencyLastPrice($conn, $i);
    $percentageDecimal = rand(1, 99);
    if($change < 0):
      $percentage = $change + ($percentageDecimal/100);
      $percentage = $percentage/100;
    else:
      $percentage = $change - ($percentageDecimal/100);
      $percentage = $percentage/100;//gaunam '0.xx' %
    endif;

    //Multiplier mazom kainom
    $randMultiplierL5 = rand(5, 10);
    $randMultiplierM5L10 = rand(3, 5);//more then 5, less then 10
    if($priceNow < 5): $percentage = $percentage * $randMultiplierL5;
    elseif($priceNow >= 5 && $priceNow <= 10): $percentage = $percentage * $randMultiplierM5L10; endif;

    $newPrice = $priceNow + ($priceNow*$percentage);

    $updateSql = "UPDATE currencies SET priceBefore=$priceNow, lastPrice=$newPrice, users_sold=0, users_bought=0 WHERE id=$i";
    mysqli_query($conn, $updateSql);

    UpdateCurrencyHistory($conn, $i, $newPrice);
    UpdateCurrencyLowAndHigh($conn, $i);
  }
}
 ?>
