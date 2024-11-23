<?php
$servername = "localhost";
$username = "root"; // Change username
$password = ""; // Change password
$dbname = "taskberry"; // Change database name

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
