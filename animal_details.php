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
    <!-- Az állat nevét adjuk a címnek -->
    <title><?= htmlspecialchars($animal['animal_name']) ?> Állat részletei</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <main class="container-fluid">
        <!-- 
        Ugyanúgy encodeoljuk a képet, megjlenítjük az állat adatait
         
        -->
        <?php $imageData = base64_encode($animal['animal_image']); ?>
        <h1>A <?= htmlspecialchars($animal['animal_name']), htmlspecialchars($animal['id'])?> állat oldala.</h1>
        <p><?= htmlspecialchars($animal['animal_age']) ?></p>
        <p><?= htmlspecialchars($animal['animal_type']) ?></p>
        <p><?= htmlspecialchars($animal['animal_gender']) ?></p>
        <p><?= htmlspecialchars($animal['animal_size']) ?></p>
        <p><?= htmlspecialchars($animal['animal_breed']) ?></p>
        <p><?= htmlspecialchars($animal['animal_description']) ?></p>
        <img src="data:image/jpeg;base64,<?= $imageData ?>" alt="<?= htmlspecialchars($animal['animal_name']) ?>">
        <p><?= htmlspecialchars($animal['created_at']) ?></p>

        <form>
            <label for="animal_message_to_creator">Üzenet küldés a feltöltőnek:</label>
            <textarea class="form-control custom-textarea" id="animal_message_to_creator" name="animal_message_to_creator" rows="5" placeholder="Itt tud üzenni az állatnak a feltöltőjének."></textarea>
        </form>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>    
</body>
</html> 