<?php
include_once('inc/header.php');
?>
  <div class="contaner mh-25" style="padding-top: 98px;">
    <div id="demo" class="carousel slide">

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="./imgages/slide1.jpg" alt="" class="d-block" style="width: 100%; max-height: 500px;">
        </div>
        <div class="carousel-item active">
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
      <!-- Shop Sidebar Start -->
      <div class="col-lg-3 col-md-12">
        <!-- Price Start -->
        <div class="border-bottom mb-4 pb-4">
          <h5 class="font-weight-semi-bold mb-4">Lọc giá</h5>
          <form>
            <div class="custom-control custom-checkbox container">
              <div class="row">
                <div class="col">
                  <input type="checkbox" class="custom-control-input" checked id="price-all">
                  <label class="custom-control-label " for="price-all">All Price</label>
                </div>
                <div class="col text-end">
                  <span class="badge bg-secondary">4</span>
                </div>
              </div>

            </div>
            <div class="custom-control custom-checkbox container">
              <div class="row">
                <div class="col">
                  <input type="checkbox" class="custom-control-input">
                  <label class="custom-control-label " for="price-1">
                    < 10 triệu</label>
                </div>
                <div class="col text-end">
                  <span class="badge bg-secondary">1</span>
                </div>
              </div>
            </div>
            <div class="custom-control custom-checkbox container">
              <div class="row">
                <div class="col">
                  <input type="checkbox" class="custom-control-input">
                  <label class="custom-control-label " for="price-2">10-15 triệu</label>
                </div>
                <div class="col text-end">
                  <span class="badge bg-secondary">2</span>
                </div>
              </div>
            </div>
            <div class="custom-control custom-checkbox container">
              <div class="row">
                <div class="col">
                  <input type="checkbox" class="custom-control-input">
                  <label class="custom-control-label " for="price-3">> 15 triệu</label>
                </div>
                <div class="col text-end">
                  <span class="badge bg-secondary">1</span>
                </div>
              </div>
            </div>

          </form>
        </div>
        <!-- Price End -->

        <!-- Color Start -->
        <div class="border-bottom mb-4 pb-4">
          <h5 class="font-weight-semi-bold mb-4">Lọc màu sắc</h5>
          <form>
            <div class="custom-control custom-checkbox container">
              <div class="row">
                <div class="col">
                  <input type="checkbox" class="custom-control-input" checked id="color-all">
                  <label class="custom-control-label " for="price-all">Đen</label>
                </div>
                <div class="col text-end">
                  <span class="badge bg-secondary">4</span>
                </div>
              </div>
            </div>

          </form>
        </div>
        <!-- Color End -->


      </div>
      <!-- Shop Sidebar End -->


      <!-- Shop Product Start -->
      <div class="col-lg-9 col-md-12">
        <div class="row pb-3">
          <div class="col-12 pb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="input-group">
                <form class="d-flex">
                  <input class="form-control me-2" type="text" placeholder="Tìm sản phẩm MACBOOK">
                  <button class="btn btn-dark" ype="button"> <span class="bi-search"></span></button>
                </form>
              </div>

              <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Sắp xếp
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item active" href="#">Phổ biến</a></li>
                  <li><a class="dropdown-item" href="#">Giá tăng dần</a></li>
                  <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" src="imgages/MAC1/1.png" alt="">
              </div>
              <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Apple MacBook Pro 13 M2</h6>
                <div class="d-flex justify-content-center">
                  <h6>36.990.000</h6>

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
          <div class="col-12 pb-1">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mb-3 ">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-itemk">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- Shop Product End -->
    </div>
  </div>
  <!-- Shop End -->
  <?php
include('inc/footer.php');
?>