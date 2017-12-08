<?php

// uzduotis:
// 1) sukurti interface "Edit" : kuri turi funkcijas: (kurios nera aprasytos (privalomos)!
    // 0) Ar gali tureti kintamuosius????
    // changeName($a)
    // isLogin()
    // getName()

// interface Edit{
//     public function changeName($a);
//     public function isLogin();
//     public function getName();
// }
//
// class Tevas implements Edit {
//
//     public function changeName($a){
//         echo "Pakeiciau varda";
//     }
// };
//
//     class User2 extends Tevas implements Edit {
//         public function print(){
//         echo "labas";
//         }
//     };
//







// 2) sukurti (abstrakcia) klase "User" :
    // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
    // A) kuri turi neprivalomus kintamuosius:
        // name, password , createdDate, lastLogin
    // B) privaloma funkcija "Loguot()"
    // C) neprivaloma funkcija clearlastLoginTime()




abstract class User {

    public $name, $password , $createdDate, $lastLogin;
    abstract function Logout();
    public function clearlasLoginTime() {

    }

}

    class Admin extends User {
        function Logout () {

        }

        public function __construct($name = "bevardis", $password = "no pass", $createDate="yyyy-mm-dd", $lastLogin="yyyy-mm-dd"){
            $this->name = $name;
            $this->password = $password;
            $this->createDate = $createDate;
            $this->lastLogin = $lastLogin;
        }
}

$user = new Admin();
$user2 = new Admin("Tomas", "bliudas1", "2017-05-12","2017-05-12");

var_dump($user);
var_dump($user2);




// 3) sukurti klase Admin :
    // A)  kuri panaudoja Edit ir User ~klases (implementuoti ir paveldeti)

























 ?>
