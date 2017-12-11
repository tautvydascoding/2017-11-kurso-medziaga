<?php
interface Edit {
  function ChangeName($a);
  function isLogin();
  function getName();
}
class User implements Edit {
  public function print(){
    echo "labas";
  }

  function ChangeName($a){
    // CODE...
  }
  function isLogin(){
    // CODE...
  }
  function getName(){
    // CODE...
  }
}

abstract class Vartotojas {
  public $name, $password , $createdDate, $lastLogin;
  abstract function Logout();
  public function clearlastLoginTime() {

  }
}

class Admin extends Vartotojas {
  function Logout(){

  }
}

 ?>
