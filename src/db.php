<?php
// Database credentials (localhost)
$host = 'localhost';
$dbname = 'chathafoods';
$username = 'root';
$password = '';


// Database credentials (production)
// $host = 'localhost';
// $dbname = 'u777841430_chathafoods';
// $username = 'u777841430_admin';
// $password = '4u$wpj$h/U';

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "✅ Connected to the database successfully.";
} catch (PDOException $e) {
    // Handle connection error
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
