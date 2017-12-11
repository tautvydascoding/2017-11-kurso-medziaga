<?php
// 2) sukurti (abstrakcia) klase "User" :
    // 0) abstrakti kalse - NEGALI TURETI ABSTRAKCIU KINTAMUJU (BET PAPRASTUS GALI)
    // A) kuri turi neprivalomus kintamuosius:
        // name, password , createdDate, lastLogin
    // B) privaloma funkcija "Loguot()"
    // C) neprivaloma funkcija clearlastLoginTime()


//ABSTRAKCIU FUNCIJU OBJEKTU NELEIS KURTIS!!!


    abstract class User {
        public $name, $password, $createDate, $lastLogin;
        abstract function Logout();
        public function clearlastLoginTime (){

        }

        public function __construct($name = "bevardis", $password = "nopass", $createDate = "yyyy-mm-dd", $lastLogin = "yyyy-mm-dd"){ // uzduodam klases kintamiesiems defaultines reiksmes, kad jeigu kazkada kasnors kurs objekta su sita klase ir nenurodis kintamuju - klase kintamiesiems priskirs defaultines reikesmes;
            $this->name = $name;
            $this->password = $password;
            $this->createDate = $createDate;
            $this->lastLogin = $lastLogin;
        }

    }
    class Admin extends User {
        public function Logout(){
            //
        }
    }

$user = new Admin();
$user2 = new Admin("tomas", "baisus", "nematytas", "nematytas");


var_dump($user);
echo "<br />";
var_dump($user2);



 ?>
