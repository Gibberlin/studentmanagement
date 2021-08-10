<?php

$name = $_POST['name'];
$reg= $_POST['reg'];
$add =$_POST['address'];
$date= $_POST['dob'];

require "./dbcon.php";

$sql="INSERT INTO `17` ( `name`, `reg`, `address`, `dob`) VALUES ('$name', '$reg', '$add', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
  header("location: ../dashboard.php");


?>