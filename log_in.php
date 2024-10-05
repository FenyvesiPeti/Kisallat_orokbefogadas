<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <?php include 'header.php'; ?>
    </header>
        <main class="flex-grow-1">
        <div class="log_in_style">
            <input type="checkbox" id="check">
            <div class="login form">
                <header>Bejelentkezés</header>
                <form method="POST" action="log_in.php">
                    <input type="text" placeholder="Adja meg a felhasználónevét">
                    <input type="text" placeholder="Adja meg az e-mailt">
                    <input type="password" placeholder="Adja meg a jelszavát">
                    <!--<a href="#">Forgot password?</a>-->
                    <input type="button" class="button" value="Bejelentkezés">
                </form>
                <div class="signup">
                    <span class="signup">Nincs fiókja?
                    <a href="sign_up.php">Regisztráció</a>
                    </span>
                </div>
            </div>
        </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <?php
    //TESZT ha a "Bejelentkezés" gombra (ami a headerben van) 
    //kattintasz amikor már a log.php oldalon vagy akkor bedob egy teszt felhasználóba"

    // Szimuláljuk, hogy a felhasználó be van jelentkezve
    // Ha valós bejelentkezés lenne, ez az adatbázisból jönne.
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = "TesztFelhasználó";
    $_SESSION['user_id'] = 1;
    ?>
</body>
</html>