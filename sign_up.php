<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <?php include 'header.php'; ?>
    </header>
        <main class="flex-grow-1">
        <div class="registration-style form">
            <header>Signup</header>
            <form action="#">
                <input type="text" placeholder="Enter your email">
                <input type="password" placeholder="Create a password">
                <input type="password" placeholder="Confirm your password">
                <input type="button" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                <label for="check">Login</label>
                </span>
            </div>
        </div>
        </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>