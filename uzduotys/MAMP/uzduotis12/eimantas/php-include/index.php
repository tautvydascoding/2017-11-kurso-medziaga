 <?php require_once('./header.php'); ?>

        <div class="container">
            <div id="wrapper" class="row">
                <aside class="col-md-3 bg-warning aukstis-500">

                    <?php
                        $name = "Tomas";

                        // if-ai rasosi su : vietoj skliaustu
                        // galima ir paprastai su {}
                        if($name === "Tomas") :
                            echo "Vardas Tomas <br />";
                            echo "Cats... <br />";
                        else:
                            echo("Vardas ne Tomas <br />");
                            echo("More cats... <br />");
                        endif;

                        // standartinis variantas
                        if($name === "Tomas") {
                            echo "Vardas Tomas <br />";
                            echo "Cats... <br />";
                        }else{
                            echo("Vardas ne Tomas <br />");
                            echo("More cats... <br />");
                        };

                        // foreach sukasi per masyvo ilgi ir spausdina
                        // $masyvoVienas = indexas - kiekvieno stalciaus info
                        $mas = array(1,2,3,4,5,6);
                        foreach ($mas as $masyvoVienas ) {
                            echo "$masyvoVienas <br />";
                            if($masyvoVienas == 6){
                                echo "pabaiga";
                            };
                        };
                    ?>

                </aside>
                <main class="col-md-9 bg-light">
                <!-- ikelia content faila -->
                <?php include('./content.php') ?>
<!-- ikelia footer faila -->
<?php require_once('./footer.php') ?>
