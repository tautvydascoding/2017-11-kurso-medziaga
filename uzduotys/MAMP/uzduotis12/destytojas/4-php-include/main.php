
   <!-- end conteiner -->
   <div class="container  ">
        <div id="wrapper" class="row">
            <aside class="col-md-3  bg-warning aukstis-500">


                <?php

                 $name = "Tomas";
                 if ($name === "Tomas") :
                     echo "Vardas Tomas <br />";
                     echo "balala <br />";
                else :
                        echo "Vardas ne Tomas <br />";
                        echo "balala <br />";
                 endif;

                 if ($name === "Tomas") {
                     echo "Vardas Tomas <br />";
                     echo "balala <br />";
                 } else {
                        echo "Vardas ne Tomas <br />";
                        echo "balala <br />";
                 }




                 if ($name === "Tomas") :
             ?>
                 <b>Vardas Tomas</b> <br />
                 <b>fg fghj </b> <br />
             <?php else : ?>
                     <b>Vardas ne Tomas </b> <br />
                     <b>fg fghj</b>  <br />
             <?php endif; ?>



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
