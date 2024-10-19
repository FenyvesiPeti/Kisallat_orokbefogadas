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
                <?php
                if(isset($_POST["login"])){
                    //Megnézi, hogy van-e már session, ha nincs, akkor létrehozza
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start(); //elinicializálja a session változót
                    }
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    require_once 'db_connection.php';
                    $sql = "SELECT * FROM felhasznalok WHERE email = ?";
                    $stmt = mysqli_stmt_init($conn);
                    if(mysqli_stmt_prepare($stmt, $sql)){
                        mysqli_stmt_bind_param($stmt, "s", $email);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $user = mysqli_fetch_assoc($result);
                        if($user){
                            if(password_verify($password, $user["password"])){
                                $_SESSION["user"] = $user['id']; // Set session variable
                                $_SESSION["full_name"] = $user['full_name']; // Store full name in session
                                $_SESSION['just_logged_in'] = true; // Set flag for just logged in
                                header("Location: index.php");
                                die();
                            }else{
                                echo "<div class='alert alert-danger'>Hibás jelszó!</div>";
                            }   
                        }else{
                            echo "<div class='alert alert-danger'>Az E-mail nem egyezik!</div>";
                        }
                    }
                }
                ?>
                <form method="POST" action="log_in.php">
                    <input type="email" name="email" placeholder="Adja meg az e-mailt">
                    <input type="password" name="password" placeholder="Adja meg a jelszavát">
                    <input type="submit" name="login" class="button" value="Bejelentkezés">
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
</body>
</html>