
 <?php

 class User{
     public $username = "vartotojas";
     public $password = "slaptazodis";
     public $rights = "teises";
     public function Login($name, $pass){
         if($name == $this->username && $pass == $this->password){
             echo "You've loged in";
         }else{
             echo "Try again";
         }


     }
 }




  ?>
