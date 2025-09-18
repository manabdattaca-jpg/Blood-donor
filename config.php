<?php
$serverName = "tcp:yourserver.database.windows.net,1433"; 
$database   = "YourDatabaseName";
$username   = "youradmin"; 
$password   = "YourStrongPassword";

// Use SQL Server driver
try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // for testing
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
