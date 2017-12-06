<?php
// uzduotis:
// 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
    // 0) Ar gali tureti kintamuosius????
    // changeName($a)
    // isLogin()
    // getName()

// reikalavimai/receptas - klasems
    interface Edit {
        public function changeName($a);
        public function isLogin();
        public function getName();
    }
    class Tevas   {
        public function changeName($a) {
            // code
        }
    }
    class User2 extends Tevas implements Edit {
        public function print() {
            echo "labas";
        }

        public function isLogin() {
            // code
        }
        public function getName(){
            // code
        }
    }



// =============abstract class and function======================
// 2) sukurti (abstrakcia) klase "User" :
// 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
// A) kuri turi neprivalomus kintamuosius:
    // name, password , createdDate, lastLogin
// B) privaloma funkcija "Loguot()"
// C) neprivaloma funkcija clearlastLoginTime()


abstract class User {
    public $name, $password , $createdDate, $lastLogin;
    abstract function Loguot();
    public function clearlastLoginTime() {

    }
}

class Admin extends User {
    function Loguot() {
        // code
    }
     function __construct($name = "bevardis" ,  $password ="no pass" , $createdDate="yyyy-mm-dd", $lastLogin="yyyy-mm-dd"){
        $this->name = $name;
        $this->password = $password;
        $this->createdDate = $createdDate;
        $this->lastLogin = $lastLogin;
    }
}
$user = new Admin();
$user2 = new Admin("Tomas", "tratata", "2017-05-12", "2017-05-12");

var_dump($user);
var_dump($user2);
