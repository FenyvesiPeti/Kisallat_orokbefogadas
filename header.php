<?php

session_start(); // Session indítása

// Csak akkor állítja be a tesztfelhasználót, ha még nincs bejelentkezve
if (!isset($_SESSION['user'])) {
    // Tesztfelhasználó beállítása
    $_SESSION['user'] = 'tesztfelhasznalo';
}
?>

<header class="container-fluid site-header fixed-top mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <div class="col-md-6 d-flex align-items-center">
            <a href="index.php"><img src="img/icon.webp" alt="Logo" style="max-height: 80px;"></a>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col text-end other-sites">
                    <a href="fotozastippek.php">Fotózási tippek</a>
                    <a href="kapcsolat.php">A weboldalról</a>
                </div>
            </div>
            <div class="row">
                <div class="col text-end">

                    <!--Ellenőrzük hogy a felhasználó bevan-e jelentkezve.-->
                    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>

                        <!--Ha igen akkor a 2 gomb megváltozik-->
                        <a href="upload_animal.php" class="btn btn-success">Állat feltöltés</a> 
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="logout.php">Kijelentkezés</a></li>
                            </ul>
                        </div>

                    <!--Ha nem akkor az alap 2 gomb van.-->
                    <?php else: ?> 
                        <a href="log_in.php" class="btn btn-success">Bejelentkezés</a>
                        <a href="sign_up.php" class="btn btn-secondary btn-reg">Regisztráció</a>
                    <?php endif; ?>

                </div>
            </div>
        </div> 
    </div>
</header>

<!--Dropdon menühoz bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>