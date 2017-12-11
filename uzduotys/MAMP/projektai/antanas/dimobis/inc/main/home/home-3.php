<?php
    include_once('icons/svg-icons.php');
    include_once('inc/dbc.php');

    function getLink($conn, $id) {
        $my_sql = " SELECT * FROM info_links
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
    $link1 = getLink($conn, 1);
    $link2 = getLink($conn, 2);
    $link3 = getLink($conn, 3);
    $link4 = getLink($conn, 4);
    $link5 = getLink($conn, 5);
?>
<div class="row home-form3">
    <div class="col-md-12">
        <div class="row">
            <a class="col-md-4" href="#">
                <div class="accessories-1">
                    <div class="row">
                        <div class="col-md-12   height-200 light-g">
                            <div class="accessories-icon">
                                <?php echo $headphones ?>
                            </div>
                            <?php echo $link1['name'] ?>
                        </div>
                    </div>
                </div>
            </a>
            <a class="col-md-4" href="#">
                <div class="accessories-2">
                    <div class="row">
                        <div class="col-md-12   height-200 light-g">
                            <div class="accessories-icon">
                                <?php echo $car_chargers ?>
                            </div>
                            <?php echo $link2['name'] ?>
                        </div>
                    </div>
                </div>
            </a>
            <a class="col-md-4" href="#">
                <div class="accessories-3">
                    <div class="row">
                        <div class="col-md-12   height-200 light-g">
                            <div class="accessories-icon">
                                <?php echo $helders ?>
                            </div>
                            <?php echo $link3['name'] ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <a class="col-md-4" href="#">
                <div class="accessories-4">
                    <div class="row">
                        <div class="col-md-12   height-100 light-g">
                            <div class="accessories-icon-2">
                                <?php echo $usb_wires ?>
                            </div>
                            <?php echo $link4['name'] ?>
                        </div>
                    </div>
                </div>
            </a>
            <a class="col-md-8" href="#">
                <div class="accessories-5">
                    <div class="row">
                        <div class="col-md-12   height-100 light-g">
                            <div class="accessories-icon-2 first">
                                <?php echo $battery1 ?>
                            </div>
                            <div class="accessories-icon-2 second">
                                <?php echo $battery2 ?>
                            </div>
                            <?php echo $link5['name'] ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
