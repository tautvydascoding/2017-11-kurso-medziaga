<?php

class user{
    protected $username = "beveardis";
    protected $password = "pass";
    protected $rights = "mazosTeises";

    function login($username, $password){
        if($username == $this->username && $password == $this->password){
            return true;
        } else{
            return false;
        }
    }
}
