<?php

$server = '79.146.203.50';
$username = 'admin';
$password = 'admin';
$database = 'RemindMe';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>