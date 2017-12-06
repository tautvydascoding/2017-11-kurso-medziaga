<?php

// Privalomu funkciju listas
interface Edit
{
    public function changeName($a);
    public function isLogin();
    public function getName();
}

class User implements Edit{
    public function siaip($belekas){
        echo $belekas;
    }
    public function changeName($a){
        // enter code here bruv
    }
    public function isLogin(){
        // enter code here bruv
    }
    public function getName(){
        // enter code here bruv
    }
}

// -------------------------------------------------------------

interface Logout{
    public function logout();
}

abstract class User2 implements Logout{
    public $name, $pass, $createDate, $lastLogin;
    public function logout(){
        echo "uve loged out"; // privalom funkcija is interface
    }
    public function clearLastLoginTime(){
        echo "cleared last login"; // neprivaloma funkcija
    }
}

abstract class Useris{ // NEGALIMA KURTI OBJ SIOS KLASES, JI NEBAIGTA
    public $name, $pass, $createDate, $lastLogin;
    abstract function logout(); // privalom funkcija bus suprogramuota kitur
    public function clearLastLoginTime(){
        echo "cleared last login"; // neprivaloma funkcija
    }

}

class Admin extends Useris{
    public function logout(){ // suprogramuota funkcija nurodyta Useris abstrakcioje klaseje

    }
    public function __construct($name = "vardux", $pass = "pass", $createDate="yyyy-mm-dd", $lastLogin = ""){
        $this->name = $name;
        $this->pass = $pass;
        $this->createDate = $createDate;
        $this->lastLogin = $lastLogin;
    }
}

$user = new Admin(); // Galima kruti nauja obj nes uzbaigtas kodas
$user2 = new Admin("tomas", "lol", "2017-05-12", "niekada");

var_dump($user);
var_dump($user2);


//
