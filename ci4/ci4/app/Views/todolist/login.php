    <body>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="title">
                    Aufgabenplaner: Login
                </h1>
            </div>
        </div>

        <div class="container">
            <?php form_open('Login/submit', array('role' => 'form')) ?>
                <div class="form-group">
                    <label for="email">Email-Adresse:</label><br>
                    <input type="email" class="form-control" id="email" name="email" size="50" placeholder="Email-Adresse eingeben"><br>
                </div>

                <div class="form-group">
                    <label for="password">Passwort:</label><br>
                    <input type="password" class="form-control" id="password" name="password" size="50" placeholder="Passwort eingeben"><br>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="materialUnchecked">
                    <label class="form-check-label" for="materialUnchecked">AGBs und Datenschutzbedingung akzeptieren</label>
                </div>
                <br>

                <button class="bt" id= "btnsubmit" type="submit" name="but1">Einloggen</button>
            </form>
            <br>

            <text>
                Noch nicht registriert?
            </text>
            <a href="<?php echo base_url('/Login/regist')?>">
                Registrierung
            </a>

        </div>
    </body>
</html>