<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'xamppicorn');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create table if it doesn't exist
$tableCreationQuery = "
CREATE TABLE IF NOT EXISTS unicorn1 (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(20) NOT NULL
)";
$conn->query($tableCreationQuery);

// Example for creating a new entry
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $sql = "INSERT INTO unicorn1 (name, contact) VALUES ('$name', '$contact')";
  $conn->query($sql);
}

// Fetch data
$sql = "SELECT * FROM unicorn1";
$result = $conn->query($sql);
$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}
echo json_encode($data);
$conn->close();
