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
    <div class="container d-flex flex-column bg-success p-5 align-items-center"style="margin-top:80px;">
    <div class="">
    <?php 
    require "./db/dbcon.php";
    $result=prefeth($valid,$conn);
    if($numr> 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $image="./images/No-image-available.png";
            if ($row['image']!=""){
                $image=$row['image'];
            }
            echo '<img src="'.$image.'" alt="image" style="border-radius:50%;">';
        }
    }?>
    </div>
    <div class="m-4 d-flex ">
        <div id="sms" class="w-70 bg-light p-3 flex-grow-1">
        <?php
        $result=prefeth($valid,$conn);
         if($numr> 0){
            while ($row = mysqli_fetch_assoc($result)){
                
                echo '<h2>Name: '.$row['name'].'</h2>';
                echo '<h2>Registration number: '.$row['reg'].'</h2>';
                echo '<h2>Date of Birth: '.$row['dob'].'</h2>';
                echo '<h2>Address: '.$row['address'].'</h2>';
            }
         }
        ?>
        </div>
        <div id="ot" class="w-30 flex-grow-0">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam voluptatibus accusantium eius? Ducimus sit maiores nulla odio similique impedit doloremque, saepe officia enim nesciunt vero adipisci dolorum culpa qui assumenda perferendis nemo, at error ipsam. Earum recusandae ea accusamus alias rerum officiis asperiores.
        </div>
    </div>
    </div>
</body>
</html>