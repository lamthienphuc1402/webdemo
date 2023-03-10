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
    <title>Lap Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="js/main.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
</head>

<body style="margin-top: 98px;">
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imgages/logo.png" alt="" width="140px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./asus.php">ASUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./macbook.php">MACBOOK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./surfacebook.php">SURFACE BOOK</a>
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
<?php } ?>