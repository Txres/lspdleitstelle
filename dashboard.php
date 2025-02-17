<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

echo "<h1>Willkommen, " . $_SESSION['user'] . "!</h1>";
echo "<p>Dies ist das LSPD Leitstellen Dashboard.</p>";
?>
