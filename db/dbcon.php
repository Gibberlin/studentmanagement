<?php
$servername="localhost";
$username="root";
$password="";
$db="sms";
$conected= false;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
$conected= true;
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>