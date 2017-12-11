<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/kontaktai.css">
    <link rel="stylesheet" href="./css/footer.css">
  </head>
  <body>
    <header class="container-fluid" id="navigacija">
        <nav class="container">
        <div class="logo">
            <h1>RobEda</h1>
        </div>
        <nav>
            <ul>
                <li><a href="./kontaktai.php"> KONTAKTAI </a></li>
                <li><a href="./produktai.php"> PRODUKTAI </a></li>
                <li><a href="./Banketai.php"> BANKETAI </a></li>
                <li><a href="./index.php"> KAVINE </a></li>
            </ul>
        </nav>
        <nav class="clearfix">
        </nav>
        </nav>
    </header>
    <main class="mdl-layout__content">
      <div class="kontaktaiMain">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col fonas">
            <div class="mainKon">
              <h3>
                  Susisiekite
              </h3>
            </div>
              <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--10-col">
                    <form class="" action="./php/email.php" method="get" onsubmit="return check()">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="sample3" name="name">
                        <label class="mdl-textfield__label" for="sample3">Vardas</label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" id="sample2" name="pastas">
                        <label class="mdl-textfield__label" for="sample2">El. paštas</label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield">
                        <!-- <label class="mdl-textfield" for="sample">Data</label> -->
                       <input class="mdl-textfield__input" type="date" id="sample" name="data">
                       <!-- <label class="mdl-textfield" for="sample">Data</label> -->
                     </div>

                     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                       <input class="mdl-textfield__input" type="textarea" id="sample1" name="numeris" name="numeris">
                       <label class="mdl-textfield__label" for="sample1">Tel. numeris</label>
                     </div>


                     <div class="mdl-textfield mdl-js-textfield"></div>
                     <input type="submit" name="" value="Siųsti" class="btn btn-secondery" id="button">

                    </form>
                  </div>
              </div>
          </div>
          <div class="mdl-cell mdl-cell--6-col">
            <div class="mainKon">
              <h3>
                  Kontaktinė informcija
              </h3>
            </div>
              <ul class="demo-list-three mdl-list">
              <li class="mdl-list__item mdl-list__item--three-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-avatar">person</i>
                <span>Arnas Kisieliauskas</span>
                <span class="mdl-list__item-text-body">
                  Vyriausias konsultantas
                </span>
              </span>
              <span class="mdl-list__item-secondary-content">
                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
              </span>
              </li>
              <li class="mdl-list__item mdl-list__item--three-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons  mdl-list__item-avatar">star</i>
                <span>El. paštas</span>
                <span class="mdl-list__item-text-body">
                  vyvajunior@gmail.com<br/>
                  RobEda@info.lt
                </span>
              </span>
              <span class="mdl-list__item-secondary-content">
                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
              </span>
              </li>
              <li class="mdl-list__item mdl-list__item--three-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons  mdl-list__item-avatar">star</i>
                <span>Telefono numeris</span>
                <span class="mdl-list__item-text-body">
                Mobilus:    +(370) 68 025 452<br/>
                Telefonas:  +(370) 58 445 402
                </span>
              </span>
              <span class="mdl-list__item-secondary-content">
                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
              </span>
              </li>
              </ul>
          </div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col fonas1">

            </div>
        </div>
      </div>
   </main>
   


    <!-- <div class="container-fluid headerToogler"></div> -->






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./libs/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./js/kontaktai.js"></script>
  </body>
</html>
