
<?php
    include_once('inc/dbc.php');

    function getManufacturer($conn, $id) {
        $my_sql = " SELECT * FROM manufacturer
                                  WHERE id=$id;
                        ";

        $result = mysqli_query($conn, $my_sql);
        if ($result) {
            $result = mysqli_fetch_assoc($result);
            return $result;
        } else {
            echo "ERROR: Ivyko klaida <br>" . mysqli_error($conn);
        }
    }
    $manufacturer = getManufacturer($conn, 1);

    function getProduct($conn, $id) {
        $my_sql = " SELECT * FROM product
                                  WHERE id=$id;
                        ";

        $result = mysqli_query($conn, $my_sql);
        if ($result) {
            $result = mysqli_fetch_assoc($result);
            return $result;
        } else {
            echo "ERROR: Ivyko klaida <br>" . mysqli_error($conn);
        }
    }
    $product = getProduct($conn, 1);

    $product_2 = "<div class='pa-product'>
                    <a href='./product'><img class='pa-product-image' src='./img/". $product['img_link'] ."'></a>
                    <a href='./product'><h6 class='pa-product-name'>". $product['name'] ."</h6></a>
                    <a href='./product'><h6 'class=pa-product-cost'>". $product['price'] ." &euro;</h6></a>
                </div>";

    $product_3 = "<div class='col-md-4    product-container'>
                    <img class='home-product-image' src='./img/". $product['img_link'] ."'>
                    <div class='ribbon'><span>Nauja</span></div>
                    <h6 class='product-name'>". $product['name'] ."</h6>
                    <h5 class='product-cost'>". $product['price'] ." &euro;</h5>
                    <div class='overlay'>
                        <div class='price'>". $product['price'] ." &euro;</div>
                        <a href='./product' type='button' class='quick-review'>greita peržiūra</a>
                        <a href='#' type='button' class='to-case'>į krepšelį</a>
                        <a href='./product' type='button' class='more'>dugiau</a>
                    </div>
                </div> ";
?>
<div class="wrapper">
    <div class="container-fluid">
        <main class="row">
            <div class="col-md-3    products-asside">
                <div class="pa-new-products">
                    <!-- tiek kiek yra sio modelio -->
                    <h5>naujai gautos prekės</h5>
                    <?php
                        $i = 0;
                        while ($i < 5) {
                            echo $product_2;
                            $i++;
                    }?>
                </div>
                <a href="#" class="pa-button">Visos naujai gautos prekės</a>
                <div class="pa-most-popular">
                    <!-- tiek kiek yra sio modelio -->
                    <h5>populiariausios prekės</h5>
                    <?php
                        $i = 0;
                        while ($i < 3) {
                            echo $product_2;
                            $i++;
                    } ?>
                </div>
                <a href="#" class="pa-button">Visos populiariausios prekės</a>
                <div class="pa-bestsellers">
                    <!-- tiek kiek yra sio modelio -->
                    <h5>geriausiai perkamos prekės</h5>
                    <?php
                        $i = 0;
                        while ($i < 1) {
                            echo $product_2;
                            $i++;
                    } ?>
                </div>
                <a href="#" class="pa-button">Visos geriausiai perkamos prekės</a>
            </div>
            <div class="col-md-9">
                <div class="row products-article">
                    <h4 class="pa-name"><?php echo $manufacturer['name'] ?></h4>
                    <h5 class="pa-cost"><?php echo "Yra ". $product['quantity'] . " prekės(ių)" ?></h5>
                    <div class="col-md-12">
                        <div class="row products-btns">
                            <div class="col-md-4">
                                <h6>Rodoma 1-60 iš belekiek dalyku</h6>
                            </div>
                            <div class="col-md-4    prdct-btn-group">
                                <button class="left" type="button" name="button"><span><</span> Ankstesnis</button>
                                <button class="right" type="button" name="button">Sekantis <span>></span></button>
                            </div>
                            <div class="col-md-4">
                                <button class="all-btn" type="button" name="button">Rodyti visus</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                                $i = 0;
                                while ($i < 60) {
                                    echo $product_3;
                                    $i++;
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row products-btns">
                            <div class="col-md-4">
                                <h6>Rodoma 1-60 iš belekiek dalyku</h6>
                            </div>
                            <div class="col-md-4    prdct-btn-group">
                                <button class="left" type="button" name="button"><span><</span> Ankstesnis</button>
                                <button class="right" type="button" name="button">Sekantis <span>></span></button>
                            </div>
                            <div class="col-md-4">
                                <button class="all-btn" type="button" name="button">Rodyti visus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
