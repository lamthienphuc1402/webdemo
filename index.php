
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
            <a class="nav-link bi-person-circle active" href="./login.php"> LOGIN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi-cart4" href="./bag.php"> BAG</a>
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
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./imgages/slide1.jpg" alt="" class="d-block" style="width: 100%; max-height: 500px;">
                    </div>
                    <div class="carousel-item" >
                    <img src="./imgages/slide2.png" alt="" class="d-block" style="width: 100%; max-height: 500px;">
                    </div>
                    <div class="carousel-item" >
                    <img src="./imgages/slide3.jpg" alt="" class="d-block" style="width: 100%; max-height: 500px;">
                    </div>
                </div>
                
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>    
        <div class="container">
            <p class="h1 text-center" style="margin-top: 25px;padding-bottom:25px;">CÁC DÒNG LAPTOP CỦA TP LAPTOP:</p>
            
            <div class="row">
                <div class="col col-12 col-sm-4" style="margin-bottom: 25px;">
                    <div class="card">
                        <div class="card-body" >
                        <h4 class="card-title">ASUS</h4>
                        <a href="asus.php" class="btn btn-dark" style="width: 90px;">CHI TIẾT</a>
                        </div>
                        <a href="asus.php"> <img class="card-img-bottom" src="./imgages/slide1.jpg" alt="Card image" style="width:100%"></a>
                    </div>
                </div>
                <div class="col col-12 col-sm-4" style="margin-bottom: 25px;">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">MACBOOK</h4>
                        <a href="macbook.php" class="btn btn-dark" style="width: 90px;">CHI TIẾT</a>
                        </div>
                        <a href="macbook.php"><img class="card-img-bottom" src="./imgages/slide2.png" alt="Card image" style="width:100%"></a>
                    </div>
                </div>
                <div class="col col-12 col-sm-4" style="margin-bottom: 25px;">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">SURFACE BOOK</h4>
                        <a href="surfacebook.php" class="btn btn-dark " style="width: 90px;">CHI TIẾT</a>
                        </div>
                        <a href="surfacebook.php"><img class="card-img-bottom" src="./imgages/slide3.jpg" alt="Card image" style="width:100%"></a>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Email address</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Để lại email của bạn để nhận các ưu đãi mới nhất của chúng tôi</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Cửa hàng ủy quyền chính hãng các dòng laptop ASUS, MACBOOK, SURFACE BOOK
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col col-12">
          <h5 class="text-uppercase">Contact</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <p class="text-white"><i class="fas fa-home me-3"></i> 69/68 Đặng Thùy Trâm Q.Bình Thạnh TP. Hồ Chí Minh</p>
            </li>
            <li>
              <p class="text-white">
                <i class="fas fa-envelope me-3"></i>
                tplaptop@gmail.com
              </p>
            </li>
            <li>
              <p class="text-white"><i class="fas fa-phone me-3"></i> + 84 234 567 88</p>
            </li>
            <li>
              <p class="text-white"><i class="fas fa-print me-3"></i> + 84 234 567 89</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="./index.php">tplaptop.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

</html>
