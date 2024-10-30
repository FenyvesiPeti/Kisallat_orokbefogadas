<?php
require_once 'db_connection.php';

// ID paraméter lekérése az URL-ből
$id = $_GET['id'];

// Lekérdezés az adott állat részletes adatainak lekéréséhez
$sql = "SELECT * FROM animals WHERE id = $id";
$result = $conn->query($sql);

//Ha nem lenne találat, akkor hibaüzenetet írunk ki
if ($result->num_rows > 0) {
    $animal = $result->fetch_assoc();
} else {
    echo "<div class='alert alert-danger'>Nincs ilyen azonosítójú állat!</div>";
    exit;
}
// Bezárjuk a kapcsolatot, hogy ne kérje le újra és újra az adatokat
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Az állat nevét adjuk az oldal címnek -->
    <title><?= htmlspecialchars($animal['animal_name']) ?> Állat részletei</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main class="flex-grow-1">
        <div class="container-fluid animal-detail-style">
            <!--Állat neve-->
            <div class="row">
                <div class="animal-detail-box col-12">
                    <div class="animal-detail-top">
                        <h1 class="text-center"><?= htmlspecialchars($animal['animal_name'])?></h1>
                    </div>
                </div>
            </div>
            <!--Állat képe-->
            <div class="row">
                <!--Ugyanúgy encodeoljuk a képet mint máshol, megjlenítjük az állat adatait-->
                <?php $imageData = base64_encode($animal['animal_image']); ?>
                <div class="animal-detail-img">
                    <img src="data:image/jpeg;base64,<?= $imageData ?>" alt="<?= htmlspecialchars($animal['animal_name']) ?>" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <!--Állat adatok rész-->
            <div class="row">
                <div class="animal-detail-box col-12">
                    <div class="animal-detail-top">
                        <p><strong>Adatok</strong></p>
                    </div>
                    <div class="animal-detail-bottom">
                        <p><strong>Életkora:</strong> <?= htmlspecialchars($animal['animal_age']) ?> éves</p>
                        <p><strong>Az állat:</strong> <?= htmlspecialchars($animal['animal_type']) ?></p>
                        <p><strong>Ivara:</strong> <?= htmlspecialchars($animal['animal_gender']) ?></p>
                        <p><strong>Méret:</strong> <?= htmlspecialchars($animal['animal_size']) ?></p>
                        <p><strong><?= htmlspecialchars(ucfirst($animal['animal_type'])) ?> fajtája:</strong> <?= htmlspecialchars($animal['animal_breed']) ?></p>
                        <p><strong>Gazdit keres óta: </strong> <?= htmlspecialchars($animal['created_at']) ?> </p>
                    </div>
                </div>
            </div>
            <!--Állat leírása rész-->
            <div class="row">
                <div class="animal-detail-box col-12">
                    <div class="animal-detail-top">
                        <p><strong>Leírás</strong></p>
                    </div>
                    <div class="animal-detail-bottom">
                        <p><?= htmlspecialchars($animal['animal_description']) ?></p>
                    </div>   
                </div>
            </div>
            <div class="row">
                <div class="animal-detail-box col-12">
                    <div class="animal-detail-top">
                        <p><strong>Üzenet küldés a feltöltőnek:</strong></p>
                    </div>
                    <div class="animal-detail-bottom">
                        <form>
                            <textarea class="form-control custom-textarea" id="animal_message_to_creator" name="animal_message_to_creator" rows="5" placeholder="Itt tud üzenni az állat jelenlegi gazdájának."></textarea>
                        </form>
                    </div>   
                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" class="btn btn-secondary animal-detail-button">Üzenet küldése</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>    
</body>
</html> 