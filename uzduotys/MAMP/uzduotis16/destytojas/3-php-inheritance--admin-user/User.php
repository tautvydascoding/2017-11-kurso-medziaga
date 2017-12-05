<?php

class User {
        protected $username = "bevardis";
        protected $password = "pass";
        protected $rights = "subscriber";
        function login($name, $pass) {
            if( $name === $this->username && $pass === $this->password ) {
                return true;
            } else {
                return false;
            }
        }
}
