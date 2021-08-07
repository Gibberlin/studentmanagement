<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>
<body>
    <div class="container bg-warning mt-5 p-3 rounded-3">
        <h1 class="text-center">Registration Form for admins</h1>
        <hr>
        <form action="./db/insert.php" method="post">
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" aria-describedby="usernameHelp" name="name" placeholder="Enter your name">
            </div>
            
            <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" class="form-control" id="deg" aria-describedby="usernameHelp" name="username" placeholder="Choose your Username">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" aria-describedby="usernameHelp" name="password" placeholder="Choose a strong password">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass2" aria-describedby="usernameHelp" name="password2" placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>