<?php


    // uzduotis:
    // 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
        // 0) Ar gali tureti kintamuosius????
        // changeName($a)
        // isLogin()
        // getName()


    // 2) sukurti (abstrakcia) klase "User" :
        // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
        // A) kuri turi neprivalomus kintamuosius:
            // name, password , createdDate, lastLogin
        // B) privaloma funkcija "Loguot()"
        // C) neprivaloma funkcija clearlastLoginTime()
    // 3) sukurti klase Admin :
        // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)

//======================1
interface Edit {
    public function changeName($a);
    public function isLogin();
    public function getName();
}

class looser implements Edit{
    public function print(){
        echo "labas";
    }
    public function changeName($a){


    }
    public function isLogin(){}
    public function getName(){}

}

//======================2
abstract class User{
    public $name, $password, $createDate, $lastLogin;
    abstract function Logout();
    public function clearLastLoginTime(){

    }
    function __construct($name = "tuscias", $password = "nieko", $createDate = "yyyy-mm-dd", $lastLogin = "yyyy-mm-dd"){
        $this->name = $name;
        $this->password = $password;
        $this->createDate = $createDate;
        $this->lastLogin = $lastLogin;
    }
}

class Admin extends User{
    function Logout(){

    }
}

$user = new Admin("jonas", "", "defaultine reiksme" );

$user2 = new Admin("Ceslovas", "nesakys", "2017-12-12", "2017-12-12");

var_dump($user);
var_dump($user2);






//
