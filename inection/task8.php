<?php
require_once('../settings/connect_datebase.php');

$mysqli = new mysqli('127.0.0.1', 'root', '', 'security');


$result = $mysqli->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
   echo $row['login'];
   echo '<br>';
   echo $row['password'];
   echo '<br>';
}

$mysqli->close();
?>