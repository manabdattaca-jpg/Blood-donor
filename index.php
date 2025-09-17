<?php
// blood_donation.php

// Process form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = (int) $_POST['age'];

    echo "<h2>Blood Donation Eligibility Result</h2>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";

    if ($age >= 18 && $age <= 65) {
        echo "<p style='color:green; font-weight:bold;'>✅ Eligible for blood donation!</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>❌ Not eligible for blood donation.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Donation Form</title>
</head>
<body>
    <h1>Blood Donation Form</h1>
    <form method="POST" action="">
        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="1" required><br><br>

        <button type="submit">Check Eligibility</button>
    </form>
</body>
</html>
