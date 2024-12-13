<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="tasks.csv"');

// Open PHP output stream for writing
$output = fopen('php://output', 'w');

// Write CSV headers
fputcsv($output, ['ID', 'Name', 'Start Time', 'End Time', 'Priority', 'Status', 'Created At', 'Updated At']);

// Connect to your database
$connection = new mysqli('localhost', 'root', '', 'taskberry');
if ($connection->connect_error) {
  die('Connection failed: ' . $connection->connect_error);
}

// Query the tasks table
$query = "SELECT id, name, starttime, endtime, priority, status, created_at, updated_at FROM tasks";
$result = $connection->query($query);

// Write each task row to the CSV
if ($result && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
  }
}

// Close the database connection
$connection->close();
fclose($output);
exit;
