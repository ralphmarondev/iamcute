<?php

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
  die(json_encode(['status' => 'error', 'message' => 'connection failed: ' . $conn->connect_error]));
}

$name = $_POST['name-input'];
$email = $_POST['email-input'];
$message = $_POST['message-input'];

$stmt = $conn->prepare('INSERT INTO messages (name, email, user_message) VALUES(?,?,?)');
$stmt->bind_param('sss', $name, $email, $message);

if ($stmt->execute()) {
  echo json_encode(['status' => 'success', 'message' => 'Message submitted successfully!']);
} else {
  error_log("SQL Error: " . $stmt->error);
  echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
