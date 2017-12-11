<?php require_once('./straipsniaiDB.php'); ?>
<?php require_once('./head.php'); ?>

    <body class="">

<?php require_once('./navigation.php'); ?>

    <div class="parallax parallax-istorija">
        <div class="tarpas">

        </div>
    </div>

<div class="container-fluid">
    <div class="row justify-content-center" id="apiemus">
            <div class="col-md-5 mr-3">
            <h1 class="">
                <?php $article = getArticle($connect, 45);
                print_r($article['artclTitle']);?>
            </h1>
            <p class="text-justify mt-3">

                <?php print_r($article['artclContent']);?>
            </p>
            <img src="./pictures/bendruomene2.jpg"  alt="bendruomene" >
        </div>

        <div class="col-md-5">
            <h1 class="">
                <?php $article = getArticle($connect, 47);
                print_r($article['artclTitle']);?>
            </h1>
            <p class="text-justify mt-3">
                <?php print_r($article['artclContent']);?>
            </p>
            <img src="./pictures/kaunas-worship.jpg"  alt="worship">
        </div>
    </div>
    <hr />
    <div class="row justify-content-center">

        <div class="col-md-5 mr-3">
            <h1 class="">
                <?php $article = getArticle($connect, 48);
                print_r($article['artclTitle']);?>
            </h1>
            <p class="text-justify mt-3">
                <?php print_r($article['artclContent']);?>
            </p>
            <img src="./pictures/bible-stud-maz.jpg" alt="our vision">
        </div>

        <div class="col-md-5">
            <h1>
                <?php $article = getArticle($connect, 45);
                print_r($article['artclTitle']);?>
            </h1>
            <p class="text-justify mt-3">
                <?php print_r($article['artclContent']);?>
            </p>
            <img src="./pictures/jaunimas-vilnius.jpg"  alt="youth">
        </div>
    </div>

    </div>
    <hr />

</div>


<?php require_once('./footer.php');?>
