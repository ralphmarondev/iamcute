<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['id']) && isset($_POST['createdby'])) {
    $taskId = $_POST['id'];
    $createdBy = $_POST['createdby'];

    // Prepare and execute the SQL statement to delete the task
    $sql = $mysqli->prepare("DELETE FROM tasks WHERE id = ? AND createdby = ?");
    $sql->bind_param("is", $taskId, $createdBy);

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
