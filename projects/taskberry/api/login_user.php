<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $mysqli->prepare("SELECT id, fullname, username FROM users WHERE username = ? AND password = ?");
    $sql->bind_param("ss", $username, $password);

    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();

      echo json_encode([
        'success' => '1',
        'message' => 'Login successful',
        'id' => $user['id'],
        'fullname' => $user['fullname'],
        'username' => $user['username']
      ]);
    } else {
      echo json_encode(['success' => '0', 'error' => 'Invalid username or password']);
    }

    $sql->close();
  } else {
    echo json_encode(['success' => '0', 'error' => 'Missing parameters']);
  }
} else {
  echo json_encode(['success' => '0', 'error' => 'Invalid request method']);
}

$mysqli->close();
