<?php
require "./db/dbcon.php";

$sql="SELECT * FROM `17`";
$result=mysqli_query($conn,$sql);
echo "<br>";
$numr = mysqli_num_rows($result);







?>