
<!--require
This is the login page here the user log's in.
The data that the user gives is then checked on the login2.php page.
it uses post method to make it more more secure.


-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="container mt-5 bg-warning p-5 rounded-1">
    
    <form action="login2.php" method="POST">
     
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="name" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
      </div>
      
     
      <div class="mb-3">
        <label for="password" class="form-label" >Password</label>
          <input type="password" class="form-control" id="password" name="password">
      </div>
  
  
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" require>
        <label class="form-check-label" for="exampleCheck1">Click here to confirm</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
        <a href="./register.php" class="btn btn-danger">Click here to Register</a>
    </form>
    </div>
</body>

</html>