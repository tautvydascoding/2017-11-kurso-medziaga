<?php

class admin extends user {
    function getUserName(){
        return $this->username; // paimu kintamaji is paveldetos user klases
    }
    function changeUserName($newusr){
        $this->username = $newusr;
    }

    function changeUserRights($rgt){
        return $this->rights;
        $this->rights = $rgt;
    }
}
