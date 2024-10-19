<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisállat örökbefogadó</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main class="flex-grow-1">
        <!--Kutya kép -->
        <div class="container-fluid kutya-hero"></div>
        <!--Szűrés + keresés rész -->
        <div class="container-fluid search-box pt-5 pb-3">
            <div class="row">
                <!-- Bal oldali szűrési opciók -->
                <div class="col-10">
                    <fieldset>
                        <h2>Keresés név szerint</h2>
                        <div class="mb-3 ms-4">
                            <input id="Form_Adaption_Keywords" class="form-control" type="text" name="Keywords" placeholder="Pl. Bogáncs">
                        </div>

                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <p class="mb-0">Faj</p>
                                <ul role="listbox">
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="kutya"><label>kutya</label>
                                    </li>
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="macska"><label>macska</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-2 col-sm-12">
                                <p class="mb-0">Ivar</p>
                                <ul role="listbox">
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="hím"><label>hím</label>
                                    </li>
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="nőstény"><label>nőstény</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-2 col-sm-12">
                                <p class="mb-0">Méret</p>
                                <ul role="listbox">
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="kicsi"><label>kicsi</label>
                                    </li>
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="közepes"><label>közepes</label>
                                    </li>
                                    <li role="option">
                                        <input id="" class="checkbox" type="checkbox" value="nagy"><label>nagy</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-2 col-sm-12">
                                <!--<p>Kor</p>-->
                                <div>
                                    <p class="ps-0">Évtől</p>
                                    <input type="text" name="form" class="form-control-age" placeholder="0" >
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-12">
                                <div>
                                    <p class="ps-0">Évig</p>
                                    <input type="text" name="form" class="form-control-age" placeholder="25">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <!--Jobb oldali rész -->
                <div class="col-md-2 d-flex flex-column justify-content-center align-items-center col-sm-12">
                    <input id="Form_Adaption_action_doSearch" class="mb-2 action-button" type="submit" name="action_doSearch" value="Szűrés">
                    <a class="resetfields" href="#">Szűrés törlése</a>
                </div>
            </div>
        </div>

        <!--Állatok doboza -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-12 animal-box">
                    <img src="img/xdd.jpg" alt="Állat neve"> 
                    <h3>Borzi</h3>
                    <p>Kor: x év</p>
                    <p>Neme: kan</p>

                    <!--Megnézzük hogy bevan-e jelenzkezve-->
                    <?php if (isset($_SESSION['user'])): ?>
                        <!--Ha igen akkor egy olyan gomb van ami átdobja az állat bővebb információs oldalra-->
                        <a href="animal_details.php?id=<?= $animal_id ?>" class="adopt-button">További részletek</a>
                    <?php else: ?>
                        <!--Ha nem akkor egy olyan gomb ami a log_in.php ra dobja-->
                        <a href="log_in.php" class="adopt-button">Kérjük jelentkezzen be további információért</a>
                    <?php endif; ?>

                </div>
                <div class="col-md-3 col-sm-12 animal-box">
                    <img src="img/xdd.jpg" alt="Állat neve"> 
                    <h3>Borzi</h3>
                    <p>Kor: x év</p>
                    <p>Neme: kan</p>

                    <!--Megnézzük hogy bevan-e jelenzkezve-->
                    <?php if (isset($_SESSION['user'])): ?>
                        <!--Ha igen akkor egy olyan gomb van ami átdobja az állat bővebb információs oldalra-->
                        <a href="animal_details.php?id=<?= $animal_id ?>" class="adopt-button">További részletek</a>
                    <?php else: ?>
                        <!--Ha nem akkor egy olyan gomb ami a log_in.php ra dobja-->
                        <a href="log_in.php" class="adopt-button">Kérjük jelentkezzen be további információért</a>
                    <?php endif; ?>

                </div>
                <div class="col-md-3 col-sm-12 animal-box">
                    <img src="img/xdd.jpg" alt="Állat neve"> 
                    <h3>Borzi</h3>
                    <p>Kor: x év</p>
                    <p>Neme: kan</p>

                    <!--Megnézzük hogy bevan-e jelenzkezve-->
                    <?php if (isset($_SESSION['user'])): ?>
                        <!--Ha igen akkor egy olyan gomb van ami átdobja az állat bővebb információs oldalra-->
                        <a href="animal_details.php?id=<?= $animal_id ?>" class="adopt-button">További részletek</a>
                    <?php else: ?>
                        <!--Ha nem akkor egy olyan gomb ami a log_in.php ra dobja-->
                        <a href="log_in.php" class="adopt-button">Kérjük jelentkezzen be további információért</a>
                    <?php endif; ?>

                </div>
                <div class="col-md-3 col-sm-12 animal-box">
                    <img src="img/xdd.jpg" alt="Állat neve"> 
                    <h3>Borzi</h3>
                    <p>Kor: x év</p>
                    <p>Neme: kan</p>

                    <!--Megnézzük hogy bevan-e jelenzkezve-->
                    <?php if (isset($_SESSION['user'])): ?>
                        <!--Ha igen akkor egy olyan gomb van ami átdobja az állat bővebb információs oldalra-->
                        <a href="animal_details.php?id=<?= $animal_id ?>" class="adopt-button">További részletek</a>
                    <?php else: ?>
                        <!--Ha nem akkor egy olyan gomb ami a log_in.php ra dobja-->
                        <a href="log_in.php" class="adopt-button">Kérjük jelentkezzen be további információért</a>
                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>