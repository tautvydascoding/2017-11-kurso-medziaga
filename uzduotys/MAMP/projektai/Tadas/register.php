<!DOCTYPE html>
<html>

<?php require_once("head.php"); ?>

<body>
  <div class="container-fluid">
    <div class="row">

      <!-- register page input side (hidden on first load!!!)  -->
      <div class="col-md-6 col-sm-12 bg-register-light login-register-input-side">

        <form action="" method="post">

        <div class="row">
          <div class="col-md-10 mx-auto">
            <p class="h1 all-uppercase text-center">register</p>
            <hr />
          </div>
        </div>

        <div class="row pt-5">
          <div class="col-md-6 mx-auto form-group">
            <div class="input-group">
              <!-- <div class="input-group-addon custom-addon"><i class="fa fa-user mx-auto"></i></div> -->
              <input type="text" name="register-username" class="form-control" id="username-register" placeholder="Username">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mx-auto form-group">
            <div class="input-group">
              <!-- <div class="input-group-addon custom-addon"><i class="fa fa-user mx-auto"></i></div> -->
              <input type="email" name="register-email" class="form-control" id="email-register" placeholder="E-mail@example.com">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mx-auto form-group">
            <div class="input-group">
              <!-- <div class="input-group-addon custom-addon"><i class="fa fa-unlock-alt mx-auto"></i></div> -->
              <input type="password" name="register-password" class="form-control" id="password-register" placeholder="Password">
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
            </div>
          </div>
        </div>

        <div class="row pb-3">
          <div class="col-md-6 mx-auto login-custom-btn">
            <button type="submit" name="register-submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">register</button>
            <!-- <button class="btn btn-success text-uppercase login-custom-btn" type="button" name="button">register</button> -->
          </div>
        </div>

      </form>

        <div class="row">
          <div class="col-md-6 mx-auto login-custom-btn">
            <button id="test-swap-back" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">back to login page</button>
            <!-- <button class="btn btn-success text-uppercase login-custom-btn" id="test-swap-back" type="button" name="button">back to login page</button> -->
          </div>
        </div>

      </div>
      <!-- END OF register page input side -->


      <div class="col-md-6 login-register-img-side custom-height-for-sm"></div>

    </div>
  </div>

  <?php require_once("scripts.php"); ?>

  <script>
  $(document).ready( function(){
    $('.login-register-img-side').show(0).animate({top: '0', opacity: '1'}, 3500);
    $('.login-register-input-side').show(0).animate({top: '0', opacity: '1'}, 1500);
  });
  </script>


    </body>

    </html>
