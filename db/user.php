<?php

$name=$_POST['name'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];
$link="./insert.php";


echo $name ." ".$pass;

echo "<a href=$link>click here, if your are not automatically redirected</a>";

?>