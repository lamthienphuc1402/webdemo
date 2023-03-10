<?php
include_once('inc/header.php');
?>
  <div class="contaner mh-25" style="padding-top: 98px;">
    <div id="demo" class="carousel slide">

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./imgages/slide1.jpg" alt="" class="d-block" style="width: 100%; max-height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="./imgages/slide2.png" alt="" class="d-block" style="width: 100%; max-height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="./imgages/slide3.jpg" alt="" class="d-block" style="width: 100%; max-height: 500px;">
        </div>
      </div>
    </div>
  </div>

  <!-- Shop Start -->
  <div class="container-fluid pt-5">
    <div class="row px-xl-5">
<?php
include('inc/shop-sidebar.php');
?>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" src="imgages/ASUS1/1.png" alt="">
              </div>
              <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">ASUS Gaming ROG Zephyrus G14</h6>
                <div class="d-flex justify-content-center">
                  <h6>27.590.000</h6>

                </div>
              </div>
              <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="asus1.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-dark mr-1"></i>Chi tiết</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-dark mr-1"></i>Thêm
                  vào
                  giỏ hàng</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" src="imgages/ASUS2/1.png" alt="">
              </div>
              <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">ASUS TUF Gaming F15</h6>
                <div class="d-flex justify-content-center">
                  <h6>20.690.000</h6>

                </div>
              </div>
              <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-dark mr-1"></i>Chi tiết</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-dark mr-1"></i>Thêm
                  vào
                  giỏ hàng</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" src="imgages/ASUS3/1.png" alt="">
              </div>
              <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Asus Vivobook OLED 15X</h6>
                <div class="d-flex justify-content-center">
                  <h6>15.190.000</h6>
                  <h6 class="text-muted ml-2"><del>16.990.000</del></h6>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-dark mr-1"></i>Chi tiết</a>
                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-dark mr-1"></i>Thêm
                  vào
                  giỏ hàng</a>
              </div>
            </div>
          </div>
  <?php
include('inc/shop-end.php');
include('inc/footer.php');
?>