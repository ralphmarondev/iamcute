<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'iamcute';

// create connection
$mysqli = new mysqli($serverName, $username, $password, $dbName);

// check connection
if ($mysqli->connect_error) {
  die('Connection failed!' . $conn->connect_error);
}
