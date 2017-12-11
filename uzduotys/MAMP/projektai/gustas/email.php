<?php require_once('./head.php'); ?>

    <body class="mail-bg">

<?php require_once('./navigation.php'); ?>


<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-9 bg-light">

            <h1 >PARAŠYKITE MUMS</h1><br />
            <h3>Įveskite savo <b>tikrą</b> el. pašto adresą, kad galėtume su Jumis susisiekti.<h6>arba susisiekite <a href="kontaktai.php">telefonu.</a></h6></h3>
            <br />

            <form action="./backend-email.php" onsubmit="return validateForm()" method="get">
              <div class="form-group">
                <label for="email">El. Pašto adresas</label>
                <input type="email" name="email" class="form-control" placeholder="Įveskite el. pašto adresą" value="" required>
                <small class="form-text text-muted">Mes nesidalinsime Jūsų el pašto adresu ir nesiųsime reklamų.</small>
              </div>
              <div class="form-group">
                <label for="vardas">Vardas</label>
                <input type="text" name="vardas" class="form-control" placeholder="Vardas" value="" required>
            </div>

            <div class="form-group">
              <label for="tema">Tema</label>
              <input type="text" name="tema" class="form-control" value="" placeholder="Tema">
            </div>

              <div class="form-group">
                  <label for="zinute">Rašykite savo žinutę čia:</label>
                  <textarea class="form-control" rows="4" name="zinute" placeholder="Jūsų žinutė" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Siųsti</button>
              <br /><br />
            </form>

        </div>

    </div>
    <br /><br />
    <br /><br />
    <br /><br />
</div>
<br /><br /><br />

<?php require_once('./footer.php');?>
