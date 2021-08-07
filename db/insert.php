<?php
$name=$_POST['name'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$pass2=$_POST['password2'];

echo $pass." ".$pass2;

if($pass==$pass2){
    
    require "./dbcon.php";
    if ($uname == ""|| $pass==""||$name==""){
        echo "please fill in everthing";
        $conn->close();
    }
    
    else { 
        $sql="INSERT INTO `admin` ( `username`, `password`, `name`) VALUES ('$uname', '$pass', '$name')";
        // INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES (NULL, 'admin', '1234', 'admin');
    
       if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
     
    }   
}
else{
    echo "check password";
}


?>