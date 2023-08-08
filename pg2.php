<?php
$servername = "localhost";
$username = "nouratask1";
$password = "";
$dbname = "voicetotxt";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the text from the POST request
$text = $_POST['text'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO texts (text) VALUES (?)");
$stmt->bind_param("s", $text);
$stmt->execute();

$stmt->close();
$conn->close();
?>