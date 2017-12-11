<?php

class User {
  public $username = "";
  public $password = "";
  public $rights = "";

  function Login()
  {
    echo "LOGIN: <br />";
    echo "Vartotojo vardas: " . $this->username . "<br />";
    echo "Vartotojo slaptazodis: " . $this->password . "<br />";
  }

}



 ?>
