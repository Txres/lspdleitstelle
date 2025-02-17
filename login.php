<?php
session_start();
$host = 'localhost';
$dbname = 'lspd_db';
$username = 'root';
$password = ''; // Dein Passwort für MySQL

// Verbindung zur Datenbank herstellen
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Benutzer in der Datenbank suchen
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Benutzer gefunden
        $_SESSION['user'] = $user;
        header("Location: dashboard.php"); // Weiterleitung zum Dashboard
        exit();
    } else {
        echo "<p style='color:red;'>Ungültiger Benutzername oder Passwort.</p>";
    }
}
?>
