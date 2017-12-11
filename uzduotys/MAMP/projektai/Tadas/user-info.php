<?php
session_start();
require_once("connect-mysql.php");

$COUNT_CURR = 12; // Kiek Crypto Valiutu isvis turime duomenu bazeje

//--------------------------------USER VARIABLES--------------------------------
//---BASIC INFO
$username = $_SESSION['login_user'];
$idx = $_SESSION['user_id'];

$userx = GetPlayerBasicInfo($connection, $idx);

$wallet = $userx['wallet'];
$email = $userx['email'];
$profile_pic = $userx['profile_pic'];
$invested = $userx['invested'];
$xp = $userx['xp'];

//---RECENT ACTIVITY INFO
$userActivity = GetUserRecentActivity($connection, $idx);
if(!empty($userActivity['activity1'])):
  $activity1 = $userActivity['activity1'];
  $activity1_time = $userActivity['activity1_time'];

  if(!empty($userActivity['activity2'])):
    $activity2 = $userActivity['activity2'];
    $activity2_time = $userActivity['activity2_time'];

    if(!empty($userActivity['activity3'])):
      $activity3 = $userActivity['activity3'];
      $activity3_time = $userActivity['activity3_time'];
    endif;
  endif;
endif;

//------------------------------------------------------------------------------
//funkcija GetPlayerBasicInfo - grazina pagrindinius vartotojo duomenis
//- email, profile_pic, wallet, invested, xp
// return array;
function GetPlayerBasicInfo($conn, $id)
{
  if($id <= 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetPlayerBasicInfo";
    return;
  endif;

  $mySql = "SELECT email, profile_pic, wallet, invested, xp FROM users WHERE user_id=$id";

  $result = mysqli_query($conn, $mySql);
  if($result):
    return mysqli_fetch_assoc($result);
  else:
    die("[ERROR]: Ivyko klaida GetPlayerBasicInfo funkcijoje: " . mysqli_error($conn));
  endif;
}

//------------------------------------------------------------------------------
//funkcija TimeElapsed grazina kiek laiko praejo nuo tam tikros datos.
//galim paduoti 2 budais:
//'2013-05-01 00:22:35' ARBA
//'@1367367755' - timestamp
//return string;
function TimeElapsed($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

//------------------------------------------------------------------------------
//funkcija GetUserRecentActivity - grazina vartotojo veiklos istorija
//return array;
function GetUserRecentActivity($conn, $id)
{
  if($id <= 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetPlayerBasicInfo";
    return;
  endif;

  $mySql = "SELECT * FROM users_activity WHERE user_id=$id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    return mysqli_fetch_assoc($result);
  else:
    die("[ERROR]: Ivyko klaida GetUserRecentActivity funkcijoje: " . mysqli_error($conn));
  endif;
}

//------------------------------------------------------------------------------
//funkcija GetUserCryptoCurrency - grazina krypto valiutos kieki vartotojo paskyroje
//return float (or string);
function GetUserCryptoCurrency($conn, $id, $curr_id)
{
  if($id <= 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetUserCryptoCurrency";
    return;
  endif;

  $crypto = "curr_" . $curr_id;
  $mySql = "SELECT $crypto FROM users WHERE user_id=$id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $result = mysqli_fetch_assoc($result);
    $many = $result[$crypto];
  endif;

  return $many;
}

//------------------------------------------------------------------------------
//funkcija GetUserAllCryptoCurrencies - grazina vartotojo visu krypto valiutu info
//NOTE: !!! Grazinto masyvo stalciai neatitinka realiu krypto valiutu ID!!!
//return array
function GetUserAllCryptoCurrencies($conn, $id)
{
  if($id <= 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetUserCryptoCurrency";
    return;
  endif;

  global $COUNT_CURR;
  $crypto = "";
  for ($i=1; $i < $COUNT_CURR + 1; $i++) {
    $crypto = $crypto . "curr_" . $i . ",";
  }

  $crypto = rtrim($crypto, ',');

  $mySql = "SELECT $crypto FROM users WHERE user_id=$id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $result = mysqli_fetch_array($result, MYSQLI_NUM);

  endif;

  return $result;
}

//------------------------------------------------------------------------------
//funkcija GetUserWalletInfo - grazina vartotojo pinigines info
//return float (or string);
function GetUserWalletInfo($conn, $id)
{
  if($id <= 0):
    echo "[ERROR] Klaidingai nurodytas ID funkcijoje GetUserWalletInfo";
    return;
  endif;

  $mySql = "SELECT wallet FROM users WHERE user_id=$id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $result = mysqli_fetch_assoc($result);
    $money = $result['wallet'];
  endif;

  return $money;
}

//------------------------------------------------------------------------------
//funkcija NewUserActivity - sukuria nauja activity pranesima vartotojui
//return NOTHING
function NewUserActivity($conn, $id, $activityMsg)
{
  $mySql = "SELECT * FROM users_activity WHERE user_id=$id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $result = mysqli_fetch_assoc($result);

    $toAct2 = $result['activity1'];
    $toAct2_time = $result['activity1_time'];
    $toAct3 = $result['activity2'];
    $toAct3_time = $result['activity2_time'];

    $timeNow = date("Y-m-d H:i:s");

    $mySql = "UPDATE users_activity SET activity1='$activityMsg', activity1_time='$timeNow', activity2='$toAct2', activity2_time='$toAct2_time'
    , activity3='$toAct3', activity3_time='$toAct3_time' WHERE user_id=$id";

    mysqli_query($conn, $mySql);

  endif;
}

//------------------------------------------------------------------------------
//funkcija GiveUserXP - suteikti vartotojui xp tasku
//return NOTHING
function GiveUserXP($conn, $id, $units, $xpPerUnit)
{
  if($units >= 0.1):

    $xpGained = ceil($units * $xpPerUnit);
    $mySql = "UPDATE users SET xp=xp+$xpGained WHERE user_id=$id";
    mysqli_query($conn, $mySql);

  endif;
}

function UpdateUserTotalInvested($conn, $id, $amount)
{
  $mySql = "UPDATE users SET invested=invested+$amount WHERE user_id=$id";
  mysqli_query($conn, $mySql);
}

//------------------------------------------------------------------------------
//funkcija GetUserBuySellHistory - grazina vartotojo buy/sell istorija pagal valiutos id
//return array
function GetUserBuySellHistory($conn, $user_id, $curr_id)
{
  $mySql = "SELECT * FROM users_buysell_history WHERE user_id=$user_id AND curr_id=$curr_id";
  $result = mysqli_query($conn, $mySql);
  if($result):
    if(mysqli_num_rows($result) > 0):
      $j = 0;
      while($row = mysqli_fetch_assoc($result)):
        $tempArray[$j] = $row;
        $j++;
      endwhile;
      return $tempArray;
    else: return false;
    endif;
  endif;
}

?>
