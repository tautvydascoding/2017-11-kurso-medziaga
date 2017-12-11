<?php
    include_once('inc/dbc.php');
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

    $product_4 = "<div class='col-md-3    product-container'>
                    <img class='home-product-image' src='./img/". $product['img_link'] ."'>
                    <div class='ribbon'><span>Nauja</span></div>
                    <h6 class='product-name'>". $product['name'] ."</h6>
                    <h5 class='product-cost'>". $product['price'] ." &euro;</h5>
                    <div class='overlay'>
                        <div class='price'>". $product['price'] ." &euro;</div>
                        <a href='#' type='button' class='quick-review'>greita peržiūra</a>
                        <a href='#' type='button' class='to-case'>į krepšelį</a>
                        <a href='./product' type='button' class='more'>dugiau</a>
                    </div>
                </div>";
 ?>
<div class="row">
    <div class="col-md-12">
        <div class="row  products-plug">
            <?php
                $i = 0;
            while ($i < 8) {
                echo $product_4;
                $i++;
            } ?>
        </div>
    </div>
</div>
