<?php
// Session indítása
session_start();
session_destroy();
// Átirányítás a menü oldalra (vagy index.php-re)
header("Location: index.php");
?>