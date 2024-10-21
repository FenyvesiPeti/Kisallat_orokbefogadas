<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Állat információ feltöltés</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <?php include 'header.php'; ?>
    </header>
        <main class="flex-grow-1">
            <div class="container upload_animal">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <h1>Állat információ feltöltés</h1>
                        <form method="POST" action="upload_animal.php" class="form_upload_animal">
                            <div class="form-group">
                                <label for="animal_name">Állat neve:</label>
                                <input type="text" class="form-control" id="animal_name" name="animal_name" placeholder="Pl.: Borzi">
                            </div>
                            <div class="form-group">
                                <label for="animal_age">Életkora:</label>
                                <input type="number" class="form-control" id="animal_age" name="animal_age" placeholder="Pl.: 3">
                                <small id="animal_age_help" class="text-muted form-text">Ha nem tudják az állat pontos életkorát akkor egy közeli értéket adjanak meg.</small>
                            </div>
                            <div class="form-group">
                                <label for="animal_type">Faj:</label>
                                <select class="form-select" id="animal_type" name="animal_type">
                                    <option value="kutya">Kutya</option>
                                    <option value="macska">Macska</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Ivara:</label>
                                <select class="form-select" id="animal_gender" name="animal_gender">
                                    <option value="hím">Hím</option>
                                    <option value="nőstény">Nőstény</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="animal_size">Mérete:</label>
                                <select class="form-select" id="animal_size" name="animal_size">
                                    <option value="kicsi">Kicsi</option>
                                    <option value="közepes">Közepes</option>
                                    <option value="nagy">Nagy</option>
                                </select>
                                <small id="animal_size_help" class="text-muted">Az állat méretét a következőképpen lehet meghatározni: kicsi (pl.: chihuahua), közepes (pl.: beagle), nagy (pl.: németjuhász).</small>
                            </div>
                            <div class="form-group">
                                <label for="animal_breed">Fajtája:</label>
                                <input type="text" class="form-control" id="animal_breed" name="animal_breed" placeholder="Pl.: Németjuhász">
                                <small id="animal_breed_help" class="text-muted form-text">Ha nem tudják az állat pontos fajtáját akkor nem kötelező megadni azt.</small>
                            </div>
                    </div>
                    <div class="col-xl-6 col-md-12 form_upload_animal">
                        <div class="animal-box">
                        <img id="preview_image" src="img/animal_preview_img.jpg" alt="Állatról egy kép">
                        <h3 id="preview_name">Neve: </h3>
                        <p id="preview_age">Kor: év</p>
                        <p id="preview_gender">Ivar: </p>
                        </div>
                        <small class="text-muted form-text">Előnézet</small>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="animal_description">Leírás:</label>
                        <textarea class="form-control custom-textarea" id="animal_description" name="animal_description" rows="3" placeholder="Pl.: Borzi egy nagyon kedves kutya, aki szeret játszani és sétálni."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="animal_image">Kép:</label>
                        <input type="file" class="form-control custom-file-input" id="animal_image" name="animal_image">
                    </div>
                    <button type="submit" class="btn btn-primary">Feltöltés</button>
                </form>
            </div>
        </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>

 <!--Ez a script segít abban, hogy a felhasználó láthassa, hogy hogyan fog kinézni az állat információja a menüoldalon.-->
<script>
    document.getElementById('animal_name').addEventListener('input', function() {
        document.getElementById('preview_name').textContent = this.value;
    });

    document.getElementById('animal_age').addEventListener('input', function() {
        document.getElementById('preview_age').textContent = 'Kor: ' + this.value + ' év';
    });

    document.getElementById('animal_gender').addEventListener('change', function() {
        document.getElementById('preview_gender').textContent = 'Neme: ' + this.value;
    });

    document.getElementById('animal_image').addEventListener('change', function(event) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById('preview_image').src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });
</script>