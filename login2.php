<?php

use function PHPSTORM_META\exitPoint;

session_start();
require "./db/dbcon.php";
$adname=$_POST["username"];
$adpass= $_POST["password"];

$sql="SELECT * FROM `admin`";
$result=mysqli_query($conn,$sql);
echo "<br>";
$numr = mysqli_num_rows($result);
$_SESSION['session']= false;

      if($numr> 0){
        while ($row = mysqli_fetch_assoc($result)) {
            // printf("%s (%s)\n", $row["name"], $row["password"]);
            // echo var_dump($row);
            // echo "<br>";
            if($adname==$row['username']&& $adpass==$row['password']){
                
                
                
                    $_SESSION['login_user'] = $adname;
                    $_SESSION['session']= true;
                    header("location: ./dashboard.php");
                    exit();
                 }
            else {
                    echo "your password or username is invalid";
                  
                    header("location: ./login.php");
                 }

            }
            
        }
?>