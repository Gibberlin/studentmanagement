<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <title><?php 
    require "./db/dbcon.php";
    $valid=$_GET['id'];
    

    function prefeth($valid,$conn){
        $sql="SELECT * FROM `17` WHERE id=".$valid;
        $result=mysqli_query($conn,$sql);
       
        return ($result);

    }
    $result= prefeth($valid,$conn);
    $numr = mysqli_num_rows($result);
    



    if($numr> 0){
        while ($row = mysqli_fetch_assoc($result)){
            
            echo $row['name'];
        }
    }?></title>
</head>
<body>
    <?php
    require "./nav.php";
    ?>
    
    <div class="container m-auto mt-5 d-flex "style="padding-top:45px;">
        <div id="sms" class="w-100 bg-light p-3">
            <h3>Student information</h3>
        <table class="table table-bordered border-primary">
        <?php
        $result= prefeth($valid,$conn);
            $numr = mysqli_num_rows($result);
            if($numr> 0){
                while ($row = mysqli_fetch_assoc($result)){
                    
                    // echo $row['name'];
                    if($row['image']==""){
                        $image="./images/No-image-available.png";
                    }else{
                        $image=$row['image'];
                    }
                    if($row['sign']==""){
                        $sign="./images/No-image-available.png";
                    }else{
                        $sign=$row['sign'];
                        
                    }


                    echo '<tr><th>Image</th><td><img src='.base64_encode($image).' alt="profile pic" class="mx-auto"><img src="'.$sign.'" alt="profile pic" class="mx-auto"></td></tr>';
                    echo '<tr><th>Name</th><td>'.$row['name'].'</td></tr>';
                    echo '<tr><th>Registration Number</th><td>'.$row['reg'].'</td></tr>';
                    echo '<tr><th>Date of Birth</th><td>'.$row['dob'].'</td></tr>';
                    echo '<tr><th>Address</th><td>'.$row['address'].'</td></tr>';
                    echo '<tr><th>phone</th><td>'.$row['phone'].'</td></tr>';
                }
            }

        ?>
        </table>
        </div>
        </div>
</body>
</html>