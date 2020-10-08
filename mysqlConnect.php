<?php

$conn = new mysqli("localhost", "admin", "recipe123");

if($conn->connect_error){
	die("Connection failed : " . $conn->connect_error);
}

echo "Connection Success";

?>

