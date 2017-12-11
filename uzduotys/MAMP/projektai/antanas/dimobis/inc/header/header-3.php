<?php
    include('inc/dbc.php');
?>
<div class="row main-width">
    <div class="col-md-12">
        <nav class="nav 1">
            <li><a class="nav-name" href="/dimobis">pagrindinis</a></li>
            <div class="dropdown">
                <li><a class="nav-name">apple</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("iPhone 4/4s", "iPhone 5/5s", "iPhone 6/6s", "iPhone 6 Plus", "iPhone 7/8");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">sansun</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("Galaxy A3", "Galaxy A3 2016", "Galaxy A3 2017", "Galaxy A5", "Galaxy A5 2016");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">sony</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("Xperia E5", "Xperia E1g", "Galaxy Note 5", "Galaxy Note 7", "Galaxy Note 8");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">lg</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("G Flex", "G2", "G2 Mini", "G3", "G3s");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">htc</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("Desire 320", "Desire 510", "Desire 610", "Desire 820", "Desire 830");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">microsoft</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("Lumia 630/635", "Lumia 640", "Lumia 640 XL", "Lumia 650", "Lumia 730/735");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">huawei</a></li>
                <div class="dropdown-content">
                    <?php
                    $model = array("Ascend G620s", "Ascend G7", "Ascend Mate 7", "Ascend Y3 II (2016)", "Ascend Y5 II (2016)");

                    foreach ($model as $value) {
                        // echo "$value <br>";
                        echo "<a class='dropdown-nav-name' href='./products'>". $value ."</a><br />";
                    }
                    ?>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">kiti</a></li>
                <div class="dropdown-content">
                    <a class="dropdown-nav-name" href="./products">Link</a>
                    <a class="dropdown-nav-name" href="./products">Link</a>
                    <a class="dropdown-nav-name" href="./products">Link</a>
                </div>
            </div>
            <div class="dropdown">
                <li><a class="nav-name">priedai</a></li>
                <div class="dropdown-content">
                    <a class="dropdown-nav-name" href="#">Link</a>
                    <a class="dropdown-nav-name" href="#">Link</a>
                    <a class="dropdown-nav-name" href="#">Link</a>
                </div>
            </div>
            <li><a class="nav-name" href="./products">Išpardavimas</a></li>
        </nav>
    </div>
</div>
