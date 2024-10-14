<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'iamcute';

$conn = new mysqli(
  $servername,
  $username,
  $password,
  $dbname
);

if ($conn->connect_error) {
  die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

$username_input = $_POST['username-input'];
$password_input = $_POST['password-input'];

$stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
$stmt->bind_param('s', $username_input);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();

  // Log the stored password hash and the password being verified
  error_log('Stored password hash: ' . $user['password']); // This logs the hashed password in your PHP error log
  error_log('Password input: ' . $password_input); // 

  if (password_verify($password_input, $user['password'])) {
    echo json_encode(['status' => 'success', 'message' => 'Login successful.']);
  } else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid password']);
  }
} else {
  echo json_encode(['status' => 'error', 'message' => 'Username not found.']);
}

$stmt->close();
$conn->close();
