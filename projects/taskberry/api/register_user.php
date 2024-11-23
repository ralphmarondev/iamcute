<?php
include './connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['password'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $mysqli->prepare("INSERT INTO users (fullname, username, password) VALUES(?, ?, ?)");
    $sql->bind_param("sss", $fullname, $username, $password);

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
