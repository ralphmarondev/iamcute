<?php
header('Content-Type: application/json');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'iamcute';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

$fullname = $_POST['fullname-input'];
$username = $_POST['username-input'];
$password = $_POST['password-input'];

// Check if the username already exists
$stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  echo json_encode(['status' => 'error', 'message' => 'Username already taken.']);
} else {
  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Insert the new user
  $stmt = $conn->prepare('INSERT INTO users (full_name, username, password) VALUES (?, ?, ?)');
  $stmt->bind_param('sss', $fullname, $username, $hashedPassword);

  if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
  } else {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
  }
}

$stmt->close();
$conn->close();
