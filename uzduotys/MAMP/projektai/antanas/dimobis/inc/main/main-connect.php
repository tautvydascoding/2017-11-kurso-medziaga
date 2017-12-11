
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12   reg">
                <h5>Registracija</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="register">
                    <h6>Sukurti paskyrą</h6>
                    <form method="post" action="./registration">
                        <label class="register-label">El. paštas</label>
                        <input type="text" name="uid" placeholder="Email">
                        <button type="submit" name="submit">Sukurti paskyrą</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login">



                    <h6>Jau prisiregistravę?</h6>
                    <form method="POST" action="inc/login.php">
                        <label class="login-label">El. paštas</label>
                        <input type="text" name="email" required>
                        <label class="login-label">Slaptažodis</label>
                        <input type="password" name="passwd" required>
                        <button type="submit" name="submit">Prisijungti</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
