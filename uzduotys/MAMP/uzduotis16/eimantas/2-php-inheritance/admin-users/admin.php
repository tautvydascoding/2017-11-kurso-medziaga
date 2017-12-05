<?php

require_once ("./User.php");

class Admin extends User{

    public function changeUserName($nm){
        $this->username = $nm;
        // $newName = $nm;
        return $this->username;

    }
    public function changeRights($rgt){

    }
}
