<?php
    include_once('inc/dbc.php');

    function getInfoText($conn, $id) {
        $my_sql = " SELECT * FROM info_text
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
    $info_text = getInfoText($conn, 1);
?>
<div class="row">
    <div class="col-md-12 info-tekstas">
        <?php
            echo $info_text['headline'];
            echo $info_text['name_1'];
            echo $info_text['text_1'];
            echo $info_text['name_2'];
            echo $info_text['text_2'];
            echo $info_text['name_3'];
            echo $info_text['text_3'];
         ?>
    </div>
</div>
