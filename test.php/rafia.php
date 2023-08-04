<!DOCTYPE html>
<html>
    <head></head>
    <body>
<?php
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
</body>
</html>