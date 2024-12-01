<?php
include './connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['name']) && isset($_POST['starttime']) && isset($_POST['endtime']) && isset($_POST['priority'])) {
    $taskName = $_POST['name'];
    $startTime = $_POST['starttime'];
    $endTime = $_POST['endtime'];
    $priority = $_POST['priority'];

    $sql = $mysqli->prepare("INSERT INTO tasks(name, starttime,endtime,priority) VALUES(?,?,?,?)");
    $sql->bind_param("ssss", $taskName, $startTime, $endTime, $priority);

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
