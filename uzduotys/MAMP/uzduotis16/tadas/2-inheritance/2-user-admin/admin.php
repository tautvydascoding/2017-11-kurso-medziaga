<?php

class Admin extends User {
  function changeUserName($x, $naujasVardas) {
    $x->username = $naujasVardas;
  }

  function changeRights($x, $newRights) {
    $x->rights = $newRights;
  }

}



 ?>
