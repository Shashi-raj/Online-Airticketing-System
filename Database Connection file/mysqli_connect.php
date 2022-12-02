<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','airline_reservation');

$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD,DB_NAME);
 if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
  }
  
  
?>
