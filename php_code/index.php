<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "mysql";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=lemp", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
