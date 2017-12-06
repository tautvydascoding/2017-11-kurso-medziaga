<?php

class User {

    protected $username = "bevardis";
    protected $password = "xxx";
    protected $rights = "subscribe";
    function Login ($name, $pass) {
        if($name === $this->username && $pass === $this->password) {
            return true;
        }else{
            return false;
        }
    }

}



 ?>
