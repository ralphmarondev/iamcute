<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['id']) && isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['password'])) {
    $userId = $_POST['id'];
    $userFullName = $_POST['fullname'];
    $userUsername = $_POST['username'];
    $userPassword = $_POST['password'];

    // Prepare and execute the SQL statement to update the task
    $sql = $mysqli->prepare("UPDATE users SET fullname = ?, username = ?, password = ?  WHERE id = ?");
    $sql->bind_param("ssss", $userFullName, $userUsername, $userPassword, $userId);

    if ($sql->execute()) {
      echo json_encode(['success' => '1']);
    } else {
      echo json_encode(['success' => '0', 'error' => $sql->error]);
    }
    $sql->close();
  } else {
    echo json_encode(['success' => '0', 'error' => 'Missing parameters']);
  }
} else {
  echo json_encode(['success' => '0', 'error' => 'Invalid request method']);
}

$mysqli->close();
