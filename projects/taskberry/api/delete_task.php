<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['name'])) {
    $taskName = $_POST['name'];

    // Prepare and execute the SQL statement to delete the task
    $sql = $mysqli->prepare("DELETE FROM tasks WHERE name = ?");
    $sql->bind_param("s", $taskName);

    if ($sql->execute()) {
      echo json_encode(['success' => '1']);
    } else {
      echo json_encode(['success' => '0', 'error' => $sql->error]);
    }
    $sql->close();
  } else {
    echo json_encode(['success' => '0', 'error' => 'Missing task name']);
  }
} else {
  echo json_encode(['success' => '0', 'error' => 'Invalid request method']);
}

$mysqli->close();
