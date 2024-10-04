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
            <div class="container-fluid text-decoration-underline search-box">
        <div class="row">
            <!-- Bal oldali szűrési opciók -->
            <div class="col-10">
                <fieldset>
                    <h2>Keresés név szerint</h2>
                    <div class="mb-3">
                        <input id="Form_Adaption_Keywords" class="form-control" type="text" name="Keywords" placeholder="Pl. Bogáncs">
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p class="mb-0">Faj</p>
                            <ul role="listbox">
                                <li role="option">
                                    <input id="" type="checkbox" value="kutya"> 
                                    <label>kutya</label>
                                </li>
                                <li role="option">
                                    <input id="" type="checkbox" value="macska"> 
                                    <label>macska</label>
                                </li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <p class="mb-0">Ivar</p>
                            <ul role="listbox">
                                <li role="option">
                                    <input id="" type="checkbox" value="hím"> 
                                    <label>hím</label>
                                </li>
                                <li role="option">
                                    <input id="" type="checkbox" value="nőstény"> 
                                    <label>nőstény</label>
                                </li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <p class="mb-0">Méret</p>
                            <ul role="listbox">
                                <li role="option">
                                    <input id="" type="checkbox" value="kicsi"> 
                                    <label>kicsi</label>
                                </li>
                                <li role="option">
                                    <input id="" type="checkbox" value="közepes"> 
                                    <label>közepes</label>
                                </li>
                                <li role="option">
                                    <input id="" type="checkbox" value="nagy"> 
                                    <label>nagy</label>
                                </li>
                            </ul>
                        </div>

                        <div class="col-2">
                            <p>Kor</p>
                            <div>
                                <p>Évtől</p>
                                <input type="text" name="form" placeholder="0" >
                            </div>
                        </div>

                        <div class="col-2">
                            <div>
                                <p>Évig</p>
                                <input type="text" name="form" placeholder="25" >
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>

                <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                    <input id="Form_Adaption_action_doSearch" class=" mb-2" type="submit" name="action_doSearch" value="Szűrés">
                    <a class="resetfields" href="#">Szűrés(ek) törlése</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-3 animal-box">
                    <img src="img/xdd.jpg" alt="Állat neve"> 
                    <h3>Borzi</h3>
                    <p>Kor: x év</p>
                    <p>Neme: kan</p>
                    <a href="animal.php?id=1" class="adopt-button">További részletek</a>
                </div>
                <div class="col-3 animal-box"></div>
                <div class="col-3 animal-box"></div>
                <div class="col-3 animal-box"></div>
            </div>
        </div>
            
        </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>