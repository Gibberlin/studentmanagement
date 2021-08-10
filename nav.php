<?php  
session_start();  
?> 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">

    <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="" width="30" height="34"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Grade Report view</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Batches
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#2020">Batch 2020</a></li>
            <li><a class="dropdown-item" href="#">Batch 2019</a></li>
            <li><a class="dropdown-item" href="#">Batch 2018</a></li>
            <li><a class="dropdown-item" href="#">Batch 2017</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="#">Alumni</a></li>
          </ul>
        </li>
        
      </ul>
      <a href="./logout.php" class="btn btn-danger">Logout <?php echo $_SESSION['login_user'];  ?></a>
    </div>
  </div>
</nav>