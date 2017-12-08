<?php

// interface nusako taisykles, kokias funkcijas tures klases, kurios implements i ta interface. taisykles klase gali ir paveldeti, kaip ir musu atveju


interface Edit {
    public function changeName($a);
    public function isLogin();
    public function getName();
}
class Tevas {
    public function changeName($a){

    }
}


class User extends Tevas implements Edit {
    public function print(){
        echo "labas";
    }
    public function isLogin(){

    }
    public function getName(){

    }

}

 ?>
