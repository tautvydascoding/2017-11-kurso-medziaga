<!-- end conteiner -->
<div class="container  ">
     <div id="wrapper" class="row">
         <aside class="col-md-3  bg-warning aukstis-500">


             <?php
             $name = "tomas";

             if($name === "tomas"){
                echo "Vardas tomas is mazosios <br/>";
                echo "blabla <br />";
            } else {
              echo "Vardas neTomas <br/>";
            }


             if($name === "Tomas"):
                echo "Vardas Tomas is didziosios <br/>";
                echo "blabla <br />";
            else:
              echo "Vardas neTomas <br/>";
            endif;


              ?>


         </aside>
         <main class="col-md-9  bg-light">
            <content class="row">
                <div class="col-md-12">
                    <!-- top section -->
                    <section class="row    aukstis-100 ">
                        <div class="col-md-12">
                            aaaaa
                        </div>
                    </section>
                    <!-- midle section -->
                    <section class="row  aukstis-200 ">
                        <div class="col-md-6 bg-danger">
                            bbbb11
                        </div>
                        <div class="col-md-6 bg-dark">
                            bbbb2
                        </div>
                    </section>
                    <!-- bottom section -->
                    <section class="row  aukstis-100 ">
                        <div class="col-md-12">
                            cccc
                        </div>
                    </section>
                </div>
            </content>
