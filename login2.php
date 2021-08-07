<?php

require "./db/dbcon.php";
$adname=$_POST["username"];
$adpass= $_POST["password"];





echo "logged in as ". $_POST["username"];
echo "resived password is ". $_POST["password"];

if($conected==true){
    
    $sql = "SELECT id FROM `admins` WHERE 1;";
    $result=mysqli_query($sql);
}
else{
    echo "haha";
}




?>