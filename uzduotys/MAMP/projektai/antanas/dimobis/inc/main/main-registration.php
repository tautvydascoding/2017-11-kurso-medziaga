<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12   registration" action="signup.php" method="get">
                <h6 class="main-label">Sukurti paskyrą</h6>
                <div class="signup">
                    <h6 class="reg-field">Jūsų asmeniniai duomenys</h6>
                    <form action="./inc/signup.php" method="POST">
                        <label class="signup-label required">* Reikalingi laukai</label>
                        <label class="signup-label">Vardas*</label>
                        <input type="text" name="firstname" required>
                        <label class="signup-label">Pavardė*</label>
                        <input type="text" name="lastname" required>
                        <label class="signup-label">El.paštas*</label>
                        <input type="text" name="email" required>
                        <label class="signup-label">Slaptažodis*</label>
                        <input type="password" name="passwd" required>
                    <!-- </form> -->
                    <h6 class="reg-field">Jūsų adresas</h6>
                    <!-- <form> -->
                        <label class="signup-label">Adresas*</label>
                        <input type="text" name="address" required>
                        <label class="signup-label">Mestas*</label>
                        <input type="text" name="city" required>
                        <label class="signup-label">Pašto kodas*</label>
                        <input type="text" name="postcode" required>
                        <button type="submit" name="submit">Registruotis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
