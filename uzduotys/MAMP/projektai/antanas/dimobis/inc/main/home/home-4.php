<?php
    include_once('icons/svg-icons.php');
    include_once('inc/dbc.php');

    function getInfo($conn, $id) {
        $my_sql = " SELECT * FROM info
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
    $info1 = getInfo($conn, 1);
    $info2 = getInfo($conn, 2);
    $info3 = getInfo($conn, 3);
    $info4 = getInfo($conn, 4);
?>
<div class="row">
    <div class="col-md-12   info light">
        <div class="row">
            <div class="col-md-6    info-1">
                <div class="info-icon">
                    <?php echo $truck ?>
                </div>
                <?php
                    echo $info1['name'];
                    echo $info1['text'];
                ?>
                <div class="info-icon">
                    <?php echo $phone ?>
                </div>
                <?php
                    echo $info2['name'];
                    echo $info2['text'];
                ?>
                <div class="info-icon">
                    <?php echo $credit_card ?>
                </div>
                <?php
                    echo $info3['name'];
                    echo $info3['text'];
                ?>
            </div>
            <div class="col-md-6    info-2">
                <?php
                    echo $info4['name'];
                    echo $info4['text'];
                    echo $info4['brand_name'];
                    echo $info4['brand_text'];
                ?>
                <p>Mes FB:</p>
                <a target="_blank" href="https://www.facebook.com/groups/298313690666851/" class="info-icon-fb">
                    <?php echo $fb ?>
                </a>
            </div>
        </div>
    </div>
</div>
