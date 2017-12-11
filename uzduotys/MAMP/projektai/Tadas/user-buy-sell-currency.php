<?php
// require_once("market-bot.php");

$CryptoTaxes = 0.02; //2%
$xpPerUnit = 0.5; // Kiek xp vartotojas gauna nusipirkes 1 unit'a CryptoValiutos

$buyError = '';
$sellError = '';
if(isset($_POST['curr-buy-submit'])) {

  if(!empty($_POST['curr-units'])):
    $curr_id = $_POST['hidden-curr-id'];
    $units = $_POST['curr-units'];
    $currArray = GetCurrencyByID($connection, $curr_id);

    if($currArray['volume'] >= $units):
      $unitPrice = $currArray['lastPrice'];
      $total = $unitPrice * $units;
      $taxes = $total * $CryptoTaxes;
      $totalTotal = $taxes + $total;
      $totalTotal = round($totalTotal,2);

      if($wallet >= $totalTotal):
        // $volumeLeft = $currArray['volume'] - $units;
        $mySql = "UPDATE currencies SET volume=volume-'$units', users_bought=users_bought+$units WHERE id=$curr_id";
        mysqli_query($connection, $mySql);

        $whichCurr = "curr_" . $curr_id;
        $mySql = "UPDATE users SET $whichCurr=$whichCurr+$units WHERE user_id=$idx";
        mysqli_query($connection, $mySql);

        $mySql = "UPDATE users SET wallet=wallet-$totalTotal WHERE user_id=$idx";
        mysqli_query($connection, $mySql);

        GiveUserXP($connection, $idx, $units, $xpPerUnit);
        UpdateUserTotalInvested($connection, $idx, $total);

        $mySql = "INSERT INTO users_buysell_history VALUES('', $idx, 'BUY', $units, $totalTotal, $unitPrice, $taxes, $curr_id)";
        mysqli_query($connection, $mySql);

        $mySql = "SELECT name FROM currencies WHERE id=$curr_id";
        $result = mysqli_query($connection, $mySql);
        if($result):
          $result = mysqli_fetch_assoc($result);
          $currName = $result['name'];
          $tempTxt = "You bought $units $currName for $$totalTotal";
          // $tempTxt = "You bought adasdasd";
          NewUserActivity($connection, $idx, $tempTxt);
        endif;

      else: $buyError = "Sorry, you don't have $$totalTotal";
      endif;

    else: $buyError = "Sorry, there aren't that much units at the moment.";
    endif;
  else: $buyError = "Units field cannot be empty!";
  endif;
}

if(isset($_POST['curr-sell-submit'])) {

  if(!empty($_POST['curr-units-sell'])):
    $curr_id = $_POST['hidden-curr-id'];
    $units = $_POST['curr-units-sell'];

    $curr_amount = GetUserCryptoCurrency($connection, $idx, $curr_id);

    if($units <= $curr_amount):
      $currArray = GetCurrencyByID($connection, $curr_id);

      $unitPrice = $currArray['lastPrice'];
      $total = $unitPrice * $units;
      $taxes = $total * $CryptoTaxes;
      $totalTotal = $total - $taxes;
      $totalTotal = round($totalTotal, 2);

      $mySql = "UPDATE currencies SET volume=volume+'$units', users_sold=users_sold+$units WHERE id=$curr_id";
      mysqli_query($connection, $mySql);

      $whichCurr = "curr_" . $curr_id;
      $mySql = "UPDATE users SET $whichCurr=$whichCurr-$units WHERE user_id=$idx";
      mysqli_query($connection, $mySql);
      $mySql = "UPDATE users SET wallet=wallet+$totalTotal WHERE user_id=$idx";
      mysqli_query($connection, $mySql);

      // $taxTo2Decimals = round($taxes, 2);
      $mySql = "INSERT INTO users_buysell_history VALUES('', $idx, 'SELL', $units, $totalTotal, $unitPrice, $taxes, $curr_id)";
      mysqli_query($connection, $mySql);

      GiveUserXP($connection, $idx, $units, $xpPerUnit);

      $currName = $currArray['name'];

      $tempTxt = "You sold $units $currName for $$totalTotal";
      NewUserActivity($connection, $idx, $tempTxt);

    else: $sellError = "Sorry, you don't have $units units of this crypto currency.";
    endif;

  else: $sellError = "Units field cannot be empty!";
  endif;

}

 ?>
