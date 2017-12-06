<?php

class Admin extends User {
    function setName($newName) {
        $this->username = $newName;

    }

    function changeRights($changeRights) {

    }
    function getName() {
        return $this->username; // paimu kintamaji is paveldetos user kalses;
    }

}



 ?>
