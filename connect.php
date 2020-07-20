<?php
$servername = "localhost";
$username = "root";
$dbname = "a_database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>
