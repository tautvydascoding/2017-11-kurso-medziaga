<?php

class Admin extends User {

        function  setName($newName) {
                $this->username = $newName;
        }
        function  changeRights($newRights) {

        }
        function getName() {
            return $this->username; // paimu kintamaji is paveldetos User class
        }
}
