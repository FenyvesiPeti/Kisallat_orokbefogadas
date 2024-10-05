<?php
// Session indítása
session_start();

// Az összes session adat törlése
$_SESSION = array();

// Session törlése, ha szükséges
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Session teljes megsemmisítése
session_destroy();

// Átirányítás a menü oldalra (vagy index.php-re)
header("Location: index.php");
exit();