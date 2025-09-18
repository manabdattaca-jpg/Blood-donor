<?php
$serverName = "tcp:sqlserver281028.database.windows.net,1433"; 
$database   = "BloodDonorDB";     // replace with your DB name
$username   = "manavadmin";       // replace with your SQL admin username
$password   = "YourRealPassword"; // replace with your password

try {
    $conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connection successful!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
