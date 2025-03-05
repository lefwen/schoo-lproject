<?php
// Get user input from the form
$name = $_POST['name'];
$age = $_POST['age'];

// Validate input
if (empty($name) || empty($age)) {
    header("Location: /");
    exit();
}

// Save data to database
$conn = new mysqli('localhost', 'username', 'password', 'database');
$stmt = $conn->prepare("INSERT INTO students (name, age) VALUES (?, ?)");
$stmt->bind_param("si", $name, $age);
$stmt->execute();
$stmt->close();
$conn->close();

// Redirect to the next page
header("Location: /success.php");
exit();
?>