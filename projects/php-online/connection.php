<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'iamcute';

// create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

// check connection
if($conn->connect_error){
  die('Connection failed!'.$conn->connect_error);
}
