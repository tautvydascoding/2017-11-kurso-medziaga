<?php
require_once("connect-mysql.php");

//------------------------------------------------------------------------------
//function GetAllCurrencies - grazina visus duomenis is kripto valiutu lenteles
//return array;
//[id]----[name]---[lastPrice]--[priceBefore]---[volume]----[low]---[high]---[img]---
function GetAllCurrencies($conn)
{
  $mySql = "SELECT * FROM currencies";

  $result = mysqli_query($conn, $mySql);
  if($result):
    if(mysqli_num_rows($result) > 0):
      $i = 0;
      while($row = mysqli_fetch_assoc($result)) {
        $allCurrencies[$i] = $row;
        $i++;
      }
    endif;
  endif;

  return $allCurrencies;
}

//------------------------------------------------------------------------------
//function GetAllCurrenciesNames - grazina krypto valiutu vardu masyva
//return array;
function GetAllCurrenciesNames($conn)
{
  $mySql = "SELECT name FROM currencies";
  $result = mysqli_query($conn, $mySql);

  if($result):
    if(mysqli_num_rows($result) > 0):
      $i = 0;
      while($row = mysqli_fetch_assoc($result)) {
        $allCurrenciesNames[$i] = $row['name'];
        $i++;
      }
    endif;
  endif;

  return $allCurrenciesNames;
}

//------------------------------------------------------------------------------
//function GetCurrencyByID - grazina nurodyta valiuta pagal ID
//return array;
//[id]----[name]---[lastPrice]--[priceBefore]---[volume]----[low]---[high]---[img]---
function GetCurrencyByID($conn, $id)
{
  if($id < 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetCurrencyByID";
    return;
  endif;

  $mySql = "SELECT * FROM currencies WHERE id=$id";

  $result = mysqli_query($conn, $mySql);
  if($result):
    return mysqli_fetch_assoc($result);
  else:
    die("[ERROR]: Ivyko klaida GetCurrencyByID funkcijoje: " . mysqli_error($conn));
  endif;
}

//------------------------------------------------------------------------------
//function GetCurrencyHistory - grazina valiutos kainos istorija pagal nurodyta ID
//return array
function GetCurrencyHistory($conn, $id){
  if($id < 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetCurrencyByID";
    return;
  endif;

  $mySql = "SELECT * FROM currhistory WHERE id=$id";

  $result = mysqli_query($conn, $mySql);
  if($result):
    return mysqli_fetch_assoc($result);
  else:
    die("[ERROR]: Ivyko klaida GetCurrencyHistory funkcijoje: " . mysqli_error($conn));
  endif;
}


?>
