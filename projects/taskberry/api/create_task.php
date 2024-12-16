<?php
include './connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['name']) && isset($_POST['starttime']) && isset($_POST['endtime']) && isset($_POST['priority']) && isset($_POST['createdby'])) {
    $taskName = $_POST['name'];
    $startTime = $_POST['starttime'];
    $endTime = $_POST['endtime'];
    $priority = $_POST['priority'];
    $createdBy = $_POST['createdby'];

    $sql = $mysqli->prepare("INSERT INTO tasks(name, starttime,endtime,priority,createdby) VALUES(?,?,?,?,?)");
    $sql->bind_param("sssss", $taskName, $startTime, $endTime, $priority, $createdBy);

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
