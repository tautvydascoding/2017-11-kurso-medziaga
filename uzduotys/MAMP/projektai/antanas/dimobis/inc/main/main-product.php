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

    function getModel1($conn, $id) {
        $my_sql = " SELECT * FROM model
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
    $model1 = getModel1($conn, 1);

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

    $product_1 = "<div class='col-md-4    one-product-container'>
                    <img class='product-image' src='./img/". $product['img_link'] ."'>
                    <div class='ribbon'><span>Nauja</span></div>
                </div> ";
?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row manufacturer">
            <div class="col-md-12">
                <h6 class="mn-manufacturer-name"><?php echo $manufacturer['name'] ?></h6>
                <h6 class="mn-model-name"><?php echo $model1['name'] ?></h6>
                <h6 class="mn-product-name"><?php echo $product['name'] ?></h6>
            </div>
        </div>
        <div class="row main-image">
            <div class="col    one-product">
                <?php echo $product_1 ?>
            </div>
            <div class="col   one-product">
                <?php echo "<h4>". $product['name'] ."</h4>" ?>
            </div>
            <div class="col cost">
                <?php echo $product['price'] ."&euro;"?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12   characteristics">
                <h5>Charakteristika</h5>
                <div class="row">
                    <div class="col-md-6    characteristics-name">
                        <h6>Skirta konkrečiam medeliui: </h6>
                        <h6>Apie prekę: </h6>
                    </div>
                    <div class="col-md-6     characteristics-value">
                        <?php echo $model1['name'] ."<br />" ?>
                        <?php echo $product['about'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
