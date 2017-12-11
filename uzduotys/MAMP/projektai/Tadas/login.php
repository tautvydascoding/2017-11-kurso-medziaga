<?php
include("login-check.php");

if(isset($_SESSION['login_user'])){
header("location: dashboard-home.php");
}?>

<!DOCTYPE html>
<html>

<?php require_once("head.php"); ?>

<body>
  <div class="container-fluid">
    <div class="row">

      <!-- Login page side picture  -->
      <div class="col-md-6 login-img-side custom-height-for-sm"></div>

      <!-- LOGIN page input side -->
      <div class="col-md-6 col-sm-12 bg-login-light login-input-side">
        <div class="row">
          <div class="col-md-10 col-sm-6 mx-auto">
            <p class="h1 all-uppercase text-center">login</p>
            <hr />
          </div>
        </div>

        <form action="" method="post">

        <div class="row pt-5">
          <div class="col-md-6 col-sm-8 mx-auto form-group">
              <div class="input-group">
                <div class="input-group-addon custom-addon"><i class="fa fa-user mx-auto"></i></div>
                <input type="text" name="login-username" class="form-control custom-border" id="username" placeholder="Username" value="<?php echo $username; ?>">
             </div>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-md-6 col-sm-8 mx-auto form-group">
            <div class="input-group">
              <div class="input-group-addon custom-addon"><i class="fa fa-unlock-alt mx-auto"></i></div>
              <input type="password" name="login-password" class="form-control custom-border" id="password" placeholder="Password">
            </div>
            <div class="text-center text-error">
              <?php echo $loginError; ?>
            </div>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-6 mx-auto login-custom-btn">
            <a href="dashboard-home.php">
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit" name="login-submit">Login</button>
            </a>
          </div>
        </div>

        </form>

        <!-- Test button.  -->
        <div class="row">
          <div class="col-6 mx-auto login-custom-btn">
            <a href="#">
              <button id="test-swap" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">go to register page</button>
            </a>
          </div>
        </div>

      </div>
      <!-- LOGIN INPUT END -->

      <!-- register page input side (hidden on first load!!!)  -->
      <div class="col-md-6 col-sm-12 bg-register-light login-register-input-side">

        <form action="" method="post">

        <div class="row">
          <div class="col-md-10 mx-auto">
            <p class="h1 all-uppercase text-center">register</p>
            <hr />
          </div>
        </div>

        <!-- TEST PICTURE SELECT BOX  -->
        <div class="row">
          <div class="col-lg-6 col-md-8 col-8 mx-auto register-picture-select-box">
            <div class="row pb-3">
              <div class="col-md-12 col-12">
                  <p class="h5 all-uppercase text-center">select your avatar:</p>
              </div>
            </div>
            <div class="row pb-3">
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle selected" name="register-img" value="man.svg" src="./images/profile-svg/man.svg" alt="">
              </div>
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="man2.svg" src="./images/profile-svg/man2.svg" alt="">
              </div>
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="man3.svg" src="./images/profile-svg/man3.svg" alt="">
              </div>
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="boy.svg" src="./images/profile-svg/boy.svg" alt="">
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="girl.svg" src="./images/profile-svg/girl.svg" alt="">
              </div>
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="girl2.svg" src="./images/profile-svg/girl2.svg" alt="">
              </div>
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="girl3.svg" src="./images/profile-svg/girl3.svg" alt="">
              </div>
              <div class="col-md-3 col-3 register-picture-select-item">
                <img class="rounded-circle" value="girl4.svg" src="./images/profile-svg/girl4.svg" alt="">
              </div>
            </div>

            <input type="hidden" name="register-img-hidden-input" id="register-img-hidden-input" value="man.svg">

          </div>
        </div>
        <!-- TEST PICTURE SELECT BOX  -->

        <div class="row pt-5">
          <div class="col-md-6 mx-auto form-group">
            <div class="input-group">
              <input type="text" name="register-username" class="form-control" id="username-register" placeholder="Username" value="<?php echo $name ?>">
            </div>
            <div class="text-center text-error">
              <?php echo $regNameError; ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mx-auto form-group">
            <div class="input-group">
              <input type="email" name="register-email" class="form-control" id="email-register" placeholder="E-mail@example.com" value="<?php echo $email ?>">
            </div>
            <div class="text-center text-error">
              <?php echo $regEmailError; ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mx-auto form-group">
            <div class="input-group">
              <input type="password" name="register-password" class="form-control" id="password-register" placeholder="Password">
            </div>
            <div class="text-center text-error">
              <?php echo $regPassError; ?>
            </div>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-md-6 mx-auto">
            <div class="form-check text-center">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="register-checkbox" value="">
                I agree to the <a href="#">T&amp;C</a>
              </label>
              <div class="text-center text-error">
                <?php echo $regCheckError; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-md-6 mx-auto login-custom-btn">
            <button type="submit" name="register-submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">register</button>
          </div>
        </div>

      </form>

        <div class="row">
          <div class="col-md-6 mx-auto login-custom-btn">
            <button id="test-swap-back" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">back to login page</button>
          </div>
        </div>

      </div>
      <!-- END OF register page input side -->


      <div class="col-md-6 login-register-img-side custom-height-for-sm"></div>


    </div>
  </div>

  <!-- JS scripts  -->
  <?php require_once("scripts.php"); ?>

  <?php if($_SESSION['register_error'] == 1):?>
  <script>instantRegisterWindow();</script>
  <?php endif; ?>

</body>

</html>
