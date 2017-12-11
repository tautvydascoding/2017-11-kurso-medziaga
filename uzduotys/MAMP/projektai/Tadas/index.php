<!DOCTYPE html>
<html>

<?php require_once("head.php");
include("connect-mysql.php");
?>
<body>
  <div class="container-fluid pr-0 pl-0">
    <header>
      <div class="row no-gutters">
        <!-- Navigacija  -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light w-100 all-uppercase">

          <!-- logo vieta  -->
          <div class="col-lg col-md-3 col-sm-3">
            <a class="navbar-brand mx-auto" href="#">
              <img src="./images/logo2.png" width="120" height="auto" alt="logo">
            </a>
          </div>

          <!-- navigacijos pasirinkimai  -->
          <div class="col-lg-8 col-md-6 col-sm-3 custom-padding-sm">
            <!-- Toggleris telefonams (sm and down)  -->
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <!-- (md ir up) navigacija  -->
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto all-uppercase">
                <li class="nav-item">
                  <a class="nav-link" id="nav-item01" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="nav-item02" href="#">Statistics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="nav-item03" href="#">Contacts</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- prisijungimo button  -->
          <div class="col-lg col-md-3 col-sm-3 w-100">
            <a href="login.php">
              <div class="login-space">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>login</span>
              </div>
            </a>
          </div>
          <div class="clearfix"></div>

        </nav>
      </div>
    </header>

    <main>
      <div class="welcome-fade-in-out">
        <h1 class="display-1">Welcome!</h1>
      </div>
      <section id="section01">
        <a href="#"><span></span><span></span><span></span></a>
      </section>
      <div class="row no-gutters">
        <div class="col-lg-12 col-md-12">
           <div class="videoWrapper">
            <iframe id="video-background" src="https://player.vimeo.com/video/186251146?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=1" width="100%" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>

      </div>

      <!-- after-videoWrapper - skirtas nustumti content'a aukstyn, nes video-wraperis panaudojo padding-bottom  -->
      <div class="after-videoWrapper" id="section02">

        <div class="row no-gutters p-5 bg-light project-blue" id="showSection1">
      <?php for ($i=0; $i < 3; $i++):
              $titleFaIcon = array("fa-compass", "fa-cloud", "fa-clock-o");
              $title = array("Explore", "Modern", "Learn");
              $article = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
              ?>

              <div class="col-lg-4 pl-5 pr-5 home-about hvr-bob for-scroll-fade-in">
                <div class="row no-gutters">
                  <div class="col">
                    <i class="fa <?php echo $titleFaIcon[$i]; ?> fa-5x img-fluid" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="row no-gutters">
                  <div class="col">
                    <h3>
                      <?php echo $title[$i]; ?>
                    </h3>
                  </div>
                </div>
                <div class="row no-gutters pt-3">
                  <div class="col">
                    <p>
                      <?php echo $article; ?>
                    </p>
                  </div>
                </div>
              </div>

      <?php endfor;?>
        </div>
        <!-- row end  -->

        <div class="row no-gutters home-stats pt-5 pb-5 project-blue-bg project-white-text" id="section03">
          <div class="col-lg-6 pl-5 pr-5 for-scroll-fade-in" id="showSection2table">
            <h3 class="pb-3 all-center">TOP-5 users</h3>
            <table class="table project-blue-bg custom-table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Wallet</th>
                  <th>XP</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $mySql = "SELECT username, wallet, xp FROM users ORDER BY xp DESC LIMIT 5;";
                $result = mysqli_query($connection, $mySql);
                if($result):
                  if(mysqli_num_rows($result) > 0):
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)):
                      $top5[$i] = $row;
                      $i++;
                    endwhile;
                  endif;
                endif;
                for ($i=0; $i < 5; $i++): ?>
                <tr>
                  <th scope="row"><?php echo $i+1; ?></th>
                  <td><?php echo $top5[$i]['username']; ?></td>
                  <td><?php echo $top5[$i]['wallet']; ?></td>
                  <td><?php echo $top5[$i]['xp']; ?></td>
                </tr>
        <?php   endfor; ?>

              </tbody>
            </table>
          </div>
          <!-- top-5 col END  -->

          <div class="col-lg-6 pl-5 pr-5 ">
            <div id="carouselExampleIndicators" class="carousel slide custom-slider-height for-scroll-fade-in" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="d-block all-center p-5">
                    <h3 class="h3 pb-5">We are proud about our users!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block all-center p-5">
                    <h3 class="h3 pb-5">Awesome community!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="d-block all-center p-5">
                    <h3 class="h3 pb-5">We are here 24/7 to help!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- Stats carousel END  -->
        </div>
        <!-- row END  -->

        <!-- Project statistics  -->
        <div class="row no-gutters project-blue-bg pb-5">

            <?php $totalUsers = GetTotalUsers($connection); ?>
            <div class="col-4 main-stats-users hvr-forward for-scroll-fade-in">
              <span class="display-2"><span class="count"><?php echo $totalUsers; ?></span></span><br />
              <span class="h3">Total users registered!</span>
            </div>

            <?php $totalActions = GetTotalUsersBuySellHistory($connection); ?>
            <div class="col-4 main-stats-users hvr-forward for-scroll-fade-in">
              <span class="display-2"><span class="count"><?php echo $totalActions; ?></span></span><br />
              <span class="h3">Market actions completed!</span>
            </div>

            <?php $totalCash = GetTotalUsersWallets($connection); ?>
            <div class="col-4 main-stats-users hvr-forward for-scroll-fade-in">
              <span class="display-2"><span class="count"><?php echo $totalCash; ?></span>K</span><br />
              <span class="h3">In-game cash earned!</span>
            </div>

        </div>
        <!-- Project statistics END  -->

        <!-- AJAX mailer  -->
        <form class="form form-group ajax m-0" method="post" action="index-send-email.php" novalidate onsubmit="validateContactForm()">
          <div class="row bg-light no-gutters pt-5 pb-5 for-scroll-fade-in" id="section04">
            <div class="col-md-3 col-sm-12 main-contact-msg">
              <p class="h4">Contact us!</p>
            </div>
            <div class="col-md-6">
              <label id="labelToError" for="main-contact-email-input">Email:</label>
              <input class="form-control" type="email" id="email-cont" placeholder="name@example.com" name="contact-email" onfocusout="validateContactForm()">
              <br />
              <label id="QlabelToError" for="main-contact-question-input">Question:</label>
                <textarea class="form-control" placeholder="Your text here.." rows="5" name="contact-message" onfocusout="validateContactForm()"></textarea>
            </div>

            <div class="col-md-3 col-sm-12 main-contact-button-send">
              <input class="btn btn-lg btn-outline-primary" type="submit" value="Send">
            </div>

            <input type="hidden" value="stop" name="hidden-contact-form-checker" id="hidden-contact-form-checker" />

          </div>
        </form>

        <div id="to-show-after-send" class="row no-gutters bg-light op-0 d-none ">
          <div class="col-12">
            <h3>Thank you for a message! We will contact you soon :)</h3>
          </div>
        </div>


        <!-- CONTACT FORM  -->



      </div>
      <!-- after-video-wrapper END  -->
    </main>

    <footer class="row no-gutters project-blue-bg">
      <div class="col-4 p-0 m-0 footer-social-list">
        <div class="footer-social-list">
          <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
          <!-- <a href="#"><i class="fa fa-share-square fa-2x" aria-hidden="true"></i></a> -->
        </div>
      </div>

      <div class="col-4 p-5">
        <img class="footer-logo" src="./images/logo2-white.png" width="150px" height="auto" alt="logo">
      </div>

      <div class="col-4 footer-copyright">
        <span>&copy; CryptoHOOT. All rights reserved.</span>
      </div>
    </footer>

  </div>
  <!-- container-fluid end  -->

  <!-- JS scripts  -->
  <?php require_once("scripts.php"); ?>

<?php
//Funkcija grazina priregistruotu useriu totala
function GetTotalUsers($conn)
{
  $mySql = "SELECT COUNT(user_id) FROM users";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $totalUsers = mysqli_fetch_assoc($result);
  endif;

  return $totalUsers['COUNT(user_id)'];
}

//Funkcija grazina atliktu operaciju skaiciu
function GetTotalUsersBuySellHistory($conn)
{
  $mySql = "SELECT COUNT(history_id) FROM users_buysell_history";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $total = mysqli_fetch_assoc($result);
  endif;

  return $total['COUNT(history_id)'];
}

//Funkcija grazina vartotoju piniginiu suma
function GetTotalUsersWallets($conn)
{
  $mySql = "SELECT SUM(wallet) FROM users";
  $result = mysqli_query($conn, $mySql);
  if($result):
    $total = mysqli_fetch_assoc($result);
  endif;
  $totalFloat = $total['SUM(wallet)'];
  $totalFloat = $totalFloat/1000;

  return $totalFloat;
}?>

</body>

</html>
