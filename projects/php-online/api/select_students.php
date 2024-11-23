<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../src/connection.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $sql = 'Select * from people_tbl';
  $result = $mysqli->query($sql);

  if ($result === false) {
    echo json_encode(['error' => 'Database query failed', 'details' => $mysqli->error]);
    http_response_code(500);
    exit;
  }
  $data = array();
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
  echo json_encode($data);
}
