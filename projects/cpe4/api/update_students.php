<?php
include '../src/connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $val1 = $_GET[''];
  $val2 = $_GET[''];
  $sql = "Update people_tbl set type1 = '$val1', type2 = '$val2' where id = $id";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
    echo json_encode(['success' => '1']);
  } else {
    echo json_encode(['success' => '0']);
  }
}
