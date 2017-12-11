<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Matthew Posh</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <!-- <link rel="stylesheet" href="./libs/MDL-v1.3.0/material.css"> -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,700" rel="stylesheet">
        <link rel="stylesheet" href="./css/main.css?v=1.0.7">
    </head>
    <body>

<!-- =============== NAV =============== -->

        <nav>
            <ul>
                <li><a href="#mp-header"><i class="fa fa-compass" aria-hidden="true"></i>home</a></li>
                    <br>
                <li><a href="#mp-albums">albums</a></li>
                    <br>
                <li><a href="#mp-reviews">reviews</a></li>
                    <br>
                <li><a href="#mp-contacts">contacts</a></li>
            </ul>
        </nav>

<!-- =============== HEADER =============== -->

<?php include_once "./showSocials.php" ?>
        <header id="mp-header">
            <img class="mx-auto" src="./img/logo.png">
            <div class="">
                <div class="social d-flex justify-content-between">
                    <a href="<?php echo $grazintiSocials[0]['link'] ?>"> <!-- https://www.facebook.com/mantas.paseveckas -->
                        <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo $grazintiSocials[1]['link'] ?>"> <!-- https://www.instagram.com/matthewposh/?hl=en -->
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                    </a>

                    <a href="#">
                        <i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i>
                    </a>

                    <a href="<?php echo $grazintiSocials[2]['link'] ?>"> <!-- https://soundcloud.com/mantaspaseveckas -->
                        <i class="fa fa-soundcloud fa-3x" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </header>

<!-- =============== ALBUMS =============== -->

        <main id="mp-albums" class="d-flex mt-4 flex-nowrap">
            <!-- SCP wrapas -->
            <div class="SCP-player-wrap">
                <div id="SCPlayer" class="SCP SCPlayer-scroll-TTF float-right">
                    <div class="SCP-top d-flex align-items-end  justify-content-between">
                        <div id="play-pause-SCP">Pick a track</div>
                        <button type="button" class="SCP-pp-button" id="play-pause-button" ><i class="fa fa-play" aria-hidden="true"></i></button>
                    </div>
                    <div class="text-center m-1">
                        <img src="" id="SCP-art">
                        <label class="mt-2 "><span class="display-track-name "></span></label>
                    </div>
                    <hr />
                    <div class="mt-1 p-1">
                        <p><span class="display-description"></span></p>
                    </div>

                    <!-- SOUNDCLOUD PLAYER HIDDEN-->
                    <iframe id="soundcloud_widget"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/"
                        width="420"
                        height="120"
                        frameborder="no">
                    </iframe>
                </div>
            </div>

            <div class="albumu-Wraper">
                <div class="albumo-dydis album-background-pos album1-background">
                    <div class="albumo-info-play-dydis albumo-info">
                        <!-- TITLE THAT FITS ALBUMAS -->
                        <div class="TTF-album">
                            <p>
                                The first album ever released by Matthew Posh, is still on of the best albums done by him.
                            </p>
                            <h3><a id="title-that-fits" >title that fits</a></h3>

                        </div>
                        <div class="TTF-tracks hidden-active">
                            <ul class="list-unstyled pt-5">
                                <li><a id="TTF-track-1" >All Aboard the Feels Train</a></li>
                                <li><a id="TTF-track-2" >Up The Wall</a></li>
                                <li><a id="TTF-track-3" >Title that Fits</a></li>
                            </ul>
                            <a id="TTF-back" >Back to album</a>
                        </div>

                        <div class="TTF-date">
                            <hr>
                            <br />
                            <small class="d-flex pl-2 muted-text">Matthew Posh</small>
                            <small class="d-flex pl-2 muted-text">Release date 2010-01-8</small>
                        </div>
                    </div>
                </div>


                <div class="albumo-dydis d-flex align-items-end flex-column album-background-pos album2-background">
                    <div class="albumo-info-play-dydis albumo-info">

                        <!-- DARK EMOJI ALBUMAS -->
                        <div class="DE-album">
                            <p>
                                Dark emoji was the second album released by MP. It climbbed its way up to the ABGT top charts.
                            </p>
                            <h3><a id="dark-emoji" >dark emoji</a></h3>
                        </div>

                        <div class="DE-tracks hidden-active">
                            <ul class="list-unstyled pt-3">
                                <li><a id="DE-track-1" >Every Cliché, Ever</a></li>
                                <li><a id="DE-track-2" >Runaways (Matthew Posh Remix Edit)</a></li>
                                <li><a id="DE-track-3" >Counting Down The Days (Matthew Posh Remix)</a></li>

                            </ul>
                            <a id="DE-back">Back to album</a>
                        </div>

                        <div class="DE-date">
                            <hr>
                            <br />
                            <small class="d-flex pl-2 muted-text">Matthew Posh</small>
                            <small class="d-flex pl-2 muted-text">Release date 2015-08-19</small>
                        </div>
                    </div>
                </div>

                <div class="albumo-dydis album-background-pos album3-background">
                    <div class="albumo-info-play-dydis albumo-info">

                        <!-- LUNAR ECLIPSE ALBUMAS -->
                        <div class="LE-album">
                            <p>
                                Lunar eclipse, yet another master piece, recently released bythe well known Matthew Posh.
                            </p>
                            <h3><a id="lunar-eclipse" >lunar eclipse</a></h3>
                        </div>
                        <div class="LE-tracks hidden-active">
                            <ul class="list-unstyled pt-4">
                                <li><a id="LE-track-1">Stories They Tell</a></li>
                                <li><a id="LE-track-2">Circles</a></li>
                                <li><a id="LE-track-3">Somebody I Could Be</a></li>
                                <li><a id="LE-track-4">Sweetest Sin</a></li>
                            </ul>
                            <a id="LE-back" >Back to album</a>
                        </div>
                        <div class="LE-date">
                            <hr>
                            <br />
                            <small class="d-flex pl-2 muted-text">Matthew Posh</small>
                            <small class="d-flex pl-2 muted-text">Release date 2017-08-19</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statsWraper">
                <?php include "./showStatsImg.php" ?>
                <div class="statsKubas kub-centravimas kub-track-info-bg">
                    <h2 class="display-3" id="track-plays">216</h2>
                    <h1>Track plays</h1>
                </div>
                <div class="statsKubas">
                    <img src="<?php echo $grazintiStatsImg[0]['link'] ?>"> <!--  -->
                </div>
                <div class="statsKubas">
                    <img src="<?php echo $grazintiStatsImg[1]['link'] ?>"> <!--  -->
                </div>
                <div class="statsKubas">
                    <img src="<?php echo $grazintiStatsImg[2]['link'] ?>"> <!--  -->
                </div>
                <div class="statsKubas kub-centravimas kub-track-info-bg">
                    <h2 class="display-3" id="likes-count">25</h2>
                    <h1>Album plays</h1>
                </div>
                <div class="statsKubas">
                    <img src="<?php echo $grazintiStatsImg[3]['link'] ?>"> <!--  -->
                </div>
            </div>
            <!-- Reklamu slideshow -->
            <div class="reklamos-Wraper">

                <div class="mySlides fade">
                    <a href="#"><img src="./img/reklamos/cityCOMP2.jpg"></a>
                </div>

                <div class="mySlides fade">
                  <a href="#"><img src="./img/reklamos/coffeeCOMP2.jpg"></a>
                </div>

                <div class="mySlides fade">
                  <a href="#"><img src="./img/reklamos/girlCOMP2.jpg"></a>
                </div>

                <div class="mySlides fade">
                  <a href="#"><img src="./img/reklamos/streetCOMP2.jpg"></a>
                </div>
            </div>
        </main>

<!-- =============== C_REVIEW =============== -->
<?php include_once "./showLast.php" ?>
        <div id="mp-reviews" class="reviews-bg pt-4 review-wraper">
            <div>
                <div class="row no-gutters review-container">
                    <div class="col-3 phoneMode text-uppercase d-flex align-items-center justify-content-center review-user-bg">
                        <?php echo"<h2>" . $grazintiReviews[0]['username'] . "</h2>"?>
                    </div>
                    <div class="col-9 phoneModeCenter review-content-bg p-5">
                        <p>
                            <?php echo"<h5>\"" . $grazintiReviews[0]['content'] . "\"</h5>"?>
                        </p>
                    </div>
                </div>
                <div class="row no-gutters mt-3 review-container">
                    <div class="col-9 phoneModeCenter review-content-bg p-5">
                        <p>
                            <?php echo"<h5>\"" . $grazintiReviews[1]['content'] . "\"</h5>"?>
                        </p>
                    </div>
                    <div class="col-3 phoneMode text-uppercase text-uppercase d-flex align-items-center justify-content-center review-user-bg">
                        <?php echo"<h2>" . $grazintiReviews[1]['username'] . "</h2>"?>
                    </div>
                </div>

                <!-- NEW FAN-REVIEW CONTENT -->
                <form class="addReview" action="./addNew.php" method="POST">
                    <div class="row no-gutters mt-3 review-container">
                        <div class="col-3 d-flex flex-column justify-content-center review-user-bg">
                            <div class="row">
                                <div class="col-10 mx-auto">
                                    <input type="text" class="newReviewUserBG" placeholder="username" name="new-review-username" value="" maxlength="16" required>
                                </div>
                            </div>
                            <!-- SUBMIT REVIEW -->
                            <div class="row no-gutters">
                                <div class="col-12 text-center mt-4 mx-auto">
                                    <button type="submit" id="review-submit" class="btn btn-outline-success">Add new review</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-9 review-content-bg p-3 d-flex justify-content-center">
                            <textarea name="new-review-content" class="newReviewContentBG" placeholder="Add your review here..." rows="11" cols="120" maxlength="200" required></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<!-- =============== CONTACT =============== -->

        <div id="mp-contacts" class="contacts">
            <div class="emailPries">
                <h1 id="emailResponse">Let me know...</h1>
                <h5>Use this form to contact me with any regarding questions!</h5>
                <br />
            </div>
            <div class="emailPo text-center text-success hidden-active">
                <label>Your email has been sent!</label>
                <br />
            </div>
            <form class="container ajaxEmail" action="./email.php" method="POST">
                <div class="row mini no-gutters d-flex justify-content-center">
                  <div class="col-4">
                    <input type="email" name="formos-email" class="form-control" maxlength="35" placeholder="email" required>
                  </div>
                  <div class="col-4">
                    <input type="text" name="formos-name" class="form-control" maxlength="20" placeholder="name" required>
                  </div>
                  <div class="col-4">
                    <input type="text" name="formos-phone" class="form-control" maxlength="9" placeholder="phone number (*Optional)">
                  </div>
                </div>
                <br>
                <div class="row no-gutters d-flex justify-content-center">
                    <div class="col-12">
                        <textarea class="form-control resizeNone" name="formos-content" rows="5" placeholder="your message" maxlength="200" required></textarea>
                    </div>
                </div>
                <br>
                <br>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="form-submit" class="btn btn-lg btn-outline-info">Submit</button>
                </div>
            </form>
        </div>

<!-- =============== END CONTACT =============== -->

<!-- =============== FOOTER =============== -->

        <footer class="d-flex mt-4 justify-content-around">
            <div class="footer-items text-center">
                <strong>About me</strong>
                <hr class="footerStyle">
                <div class="mt-3">
                    <p>
                        Ham hock strip steak cupim drumstick kielbasa meatloaf, short ribs buffalo jowl t-bone ball tip. Bacon pig jowl sausage turkey t-bone. Drumstick spare ribs sausage chuck bresaola shankle tenderloin. Turkey frankfurter buffalo, pork chicken kielbasa sirloin sausage doner kevin.
                    </p>
                </div>
            </div>
            <div class="footer-items text-center">
                <strong>Information</strong>
                <hr class="footerStyle">
                <div class="mt-3">
                    <p>
                        Shank boudin bacon pig salami. Venison tri-tip meatloaf shankle frankfurter short ribs. Tongue shoulder strip steak beef ribs filet mignon venison buffalo salami bacon ribeye. Alcatra capicola shoulder shank buffalo ham hock tail porchetta kevin rump.
                    </p>
                </div>
            </div>
            <div class="footer-items eventsHide text-center">
                <strong>Events</strong>
                <hr class="footerStyle">
                <div class="mt-3 ">
                    <div class="row no-gutters">
                        <div class="col-3">
                            <a href=""><img src="./img/events/1.jpg" alt="events pic"></a>
                        </div>
                        <div class="col-3">
                            <a href=""><img src="./img/events/2.jpg" alt="events pic"></a>
                        </div>
                        <div class="col-3">
                            <a href=""><img src="./img/events/3.jpg" alt="events pic"></a>
                        </div>
                        <div class="col-3">
                            <a href=""><img src="./img/events/4.jpg" alt="events pic"></a>
                        </div>
                    </div>
                    <div class="row no-gutters mt-1">
                        <div class="col-3">
                            <a href=""><img src="./img/events/5.jpg" alt="events pic"></a>
                        </div>
                        <div class="col-3">
                            <a href=""><img src="./img/events/6.jpg" alt="events pic"></a>
                        </div>
                        <div class="col-3">
                            <a href=""><img src="./img/events/7.jpg" alt="events pic"></a>
                        </div>
                        <div class="col-3">
                            <a href=""><img src="./img/events/8.jpg" alt="events pic"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-items text-center">
                <strong>Contact information</strong>
                <hr class="footerStyle">

                <div class="mt-3">
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/mantas.paseveckas">facebook</li>
                        <li><a href="https://www.instagram.com/matthewposh/?hl=en">instagram</li>
                        <li><a href="https://www.youtube.com/">youtube</li>
                        <li><a href="https://soundcloud.com/mantaspaseveckas">soundcloud</li>
                    </ul>
                </div>
            </div>
        </footer>

<!-- =============== SCRIPTS =============== -->
        <!-- <script src="./libs/MDL-v1.3.0/material.js"></script> -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
        <script src="http://w.soundcloud.com/player/api.js"></script>
        <script type="text/javascript" src="./scripts/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./scripts/main.js?=v1.0.0"></script>
        <script type="text/javascript" src="./scripts/songChange.js?=v1.0.4"></script>

    </body>
</html>
