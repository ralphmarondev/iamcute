<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['starttime']) && isset($_POST['endtime']) && isset($_POST['priority']) && isset($_POST['status']) && isset($_POST['createdby'])) {
    $taskId = $_POST['id'];
    $taskName = $_POST['name'];
    $startTime = $_POST['starttime'];
    $endTime = $_POST['endtime'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $createdBy = $_POST['createdby'];

    // Prepare and execute the SQL statement to update the task
    $sql = $mysqli->prepare("UPDATE tasks SET name = ?, starttime = ?, endtime = ?, priority = ?, status = ? WHERE id = ? AND createdby = ?");
    $sql->bind_param("sssssis", $taskName, $startTime, $endTime, $priority, $status, $taskId, $createdBy);

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
