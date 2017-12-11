<?php
    include_once('inc/dbc.php');

    function getIMG($conn, $id) {
        $my_sql = " SELECT * FROM img_links
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
    $img1 = getIMG($conn, 1);
    $img2 = getIMG($conn, 2);
    $img3 = getIMG($conn, 3);
?>
<div class="row">
    <div class="col-md-8    carousel">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/<?php echo $img1['img_link'] ?>">
                </div>
                <div class="carousel-item">
                    <img src="img/<?php echo $img2['img_link'] ?>">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="col-md-4    banner-x">
        <img src="img/<?php echo $img3['img_link'] ?>" width="383.33px"/>
    </div>
</div>
