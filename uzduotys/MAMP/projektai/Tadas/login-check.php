<?php
session_start();

require_once("connect-mysql.php");

$_SESSION['register_error'] = 0;

//------------------------------------LOGIN USER--------------------------------------
$loginError = '';
$username = '';
if (isset($_POST['login-submit'])) {
  if (empty($_POST['login-username']) || empty($_POST['login-password'])) {
    $loginError = "Username and/or password cannot be empty!";
  } else {
    $username = $_POST['login-username'];
    $password = $_POST['login-password'];

    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $mySql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $mySql);
    if($result):
      $row = mysqli_fetch_assoc($result);
    endif;

    if(mysqli_num_rows($result) > 0){
      $_SESSION['login_user'] = $row['username'];
      $_SESSION['user_id'] = $row['user_id'];
      header("location: dashboard-home.php");
    } else {
      $loginError = "Invalid username or password!";
    }
    mysqli_close($connection);
  }
};

//------------------------------------REGISTER USER------------------------------------
$regNameError = '';
$regPassError = '';
$regEmailError = '';
$regCheckError = '';
$name = '';
$email = '';
if (isset($_POST['register-submit'])) {

  $errorCount = 0;


  $name = $_POST['register-username'];
  $name = stripslashes($name);
  $name = mysqli_real_escape_string($connection, $name);
  $password = $_POST['register-password'];
  $password = stripslashes($password);
  $password = mysqli_real_escape_string($connection, $password);
  $email = $_POST['register-email'];
  $email = stripslashes($email);
  $email = mysqli_real_escape_string($connection, $email);
  $email = strtolower($email);
  $img = $_POST['register-img-hidden-input'];

  if (empty($name)): $regNameError = "Username cannot be empty!"; $errorCount++; endif;
  if (empty($password)): $regPassError = "Password cannot be empty!"; $errorCount++; endif;
  if (empty($email)): $regEmailError = "Email cannot be empty!"; $errorCount++; endif;
  if (isset($_POST['register-checkbox']) && $errorCount == 0) {
    $mySql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connection, $mySql);
    if(mysqli_num_rows($result) > 0): $regEmailError = "Email is already registered!"; $errorCount++; endif;

    $mySql = "SELECT * FROM users WHERE username='$name'";
    $result = mysqli_query($connection, $mySql);
    if(mysqli_num_rows($result) > 0): $regNameError = "Username is not available!"; $errorCount++; endif;

    if($errorCount == 0):

      $mySql = "INSERT INTO users(username, password, email, profile_pic, wallet) VALUES('$name', '$password', '$email', '$img', 250)";
      $result = mysqli_query($connection, $mySql);

      if($result):
        InsertRegisterActivity($connection, $email);
        header("location: login.php");
      else:
        die("[ERROR]: Ivyko klaida registracijos formoje: " . mysqli_error($connection));
      endif;

    endif;
  } else {
    $errorCount++;
    $regCheckError = "You need to agree to the T&C!";
  }

  if($errorCount >= 1): $_SESSION['register_error'] = 1;
  else: $_SESSION['register_error'] = 0;
  endif;
};

//------------------------------------------------------------------------------
//funkcija InsertRegisterActivity naudojama pirma karta registruojantis.
//sudeda i user activity naujus pranesimus
function InsertRegisterActivity($conn, $mail)
{
  $mySql = "SELECT * FROM users WHERE email='$mail'";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $result = mysqli_fetch_assoc($result);
    $user_id = $result['user_id'];
  endif;
  $timeNow = date("Y-m-d H:i:s");
  $mySql = "INSERT INTO users_activity VALUES('$user_id', 'First time you logged in!', '$timeNow', 'You were gifted $250 in-game money!', '$timeNow',
  'You joined CRYPTO-HOOT!', '$timeNow')";
  $result = mysqli_query($conn, $mySql);
}
?>
