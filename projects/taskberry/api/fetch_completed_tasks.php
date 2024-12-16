<?php
include './connection.php';

if (isset($_POST['createdby'])) {
  $createdby = $mysqli->real_escape_string($_POST['createdby']);
  $sql = "SELECT * FROM tasks WHERE status = 'completed' AND createdby = '$createdby' ORDER BY created_at DESC";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    $tasks = array();

    while ($row = $result->fetch_assoc()) {
      $tasks[] = $row;
    }

    echo json_encode(['success' => '1', 'tasks' => $tasks]);
  } else {
    echo json_encode(['success' => '0', 'error' => 'No task found']);
  }
} else {
  echo json_encode(['success' => '0', 'error' => 'Search parameter missing']);
}
$mysqli->close();
