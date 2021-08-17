<?php
session_start();
if($_SESSION['session']==false){
  header("location: ./exit.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
<?php
    require "./nav.php";
    ?>

    <div class="container"style="margin-top:4rem;">
      <div class="m-2 mt-4 mb-4" style="border: 3px solid green; padding:20px;">
        <h1>Batch 2017</h1>
        <hr>
        <a href="./addstudent.php" class="btn btn-outline-primary text-center">Add Students</a>
        <a href="./addstudent.php" class="btn btn-outline-danger text-center">Remove Students</a>
        <a href="./addstudent.php" class="btn btn-outline-warning text-center">Update Students</a>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">sl no:</th>
      <th scope="col">Name</th>
      <th scope="col">Reg No.</th>
      <th scope="col">Address</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      require "./students.php";
      $url="./profile.php?id=";
      $style="btn btn-success";
      if($numr> 0){
        while ($row = mysqli_fetch_assoc($result)) {
            // printf("%s (%s)\n", $row["name"], $row["password"]);
            // echo var_dump($row);
            // echo "<br>";
            echo " <th >".$row['id']."</th>
            <td>".$row['name']."</td>
            <td>".$row['reg']."</td>
            <td>".$row['address']."</td>"
            // <td><a href=".$url.$row['id']. ">"."View</a>
            .'<td><a href="'.$url.$row['id'].'" class="btn btn-success">View</a></td>"'.
          "</tr>";
        }
    }
      ?>
      </tbody>
      </table>
    </div>
</div>
</body>
</html>