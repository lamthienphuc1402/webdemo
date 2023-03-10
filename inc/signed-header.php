<?php
session_start();
require_once('inc/dbconnection.php');

if (strlen($_SESSION['id'] == 0)) {
header('location:logout.php');

} 

else { 
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="css/style.css" rel="stylesheet">
    <title>Lap Project</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="./imgages/logo.png" alt="" width="140px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto" id="mynavbar">
            <li class="nav-item">
              <a class="nav-link" href="./asus.php" id="asus">ASUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./macbook.php" id="macbook">MACBOOK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./surfacebook.php" id="surfacebook">SURFACE BOOK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bi-box-arrow-right" href="./logout.php"> LOGOUT</a>
            </li>
            <li class="nav-item">
              <a id="bag" class="nav-link bi-cart4 text-uppercase" href="./bag.php"><?php echo $_SESSION['name']; ?>'s BAG <span class="badge bg-secondary">1</span></a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Tìm kiếm">
            <button class="btn btn-dark" type="button"> <span class="bi-search"></span></button>
          </form>
        </div>
      </div>
    </nav>
    <script>
      const currentURL = window.location.href;
      if(currentURL == "http://localhost/2211/asus.php") {
        let currentClass = document.getElementById("asus");
        currentClass.className += " active";
      }
      if(currentURL == "http://localhost/2211/macbook.php") {
        let currentClass = document.getElementById("macbook");
        currentClass.className += " active";
      }
      if(currentURL == "http://localhost/2211/surfacebook.php") {
        let currentClass = document.getElementById("surfacebook");
        currentClass.className += " active";
      }
      if(currentURL == "http://localhost/2211/bag.php") {
        let currentClass = document.getElementById("bag");
        currentClass.className += " active";
      }
    </script>
  </body>
<?php } ?>