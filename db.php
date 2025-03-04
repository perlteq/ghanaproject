<?php
$host = "mysql-mwj1.railway.internal";   // Your Railway MySQL host
$dbname = "railway";      // Your Railway database name
$username = "root";        // Your Railway username
$password = "XAeDxstNpiFujVsCWDmjtycRwbvIlKCD";    // Your Railway password
$port = 3306;                // Default MySQL port

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
