<?php
include('inc/header.php');
?>
  <section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Giỏ hàng</h3>
            <div>
              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a></p>
            </div>
          </div>

          <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img src="imgages/ASUS1/1.png"
                    class="img-fluid rounded-3" alt="">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                  <p class="lead fw-normal mb-2">ASUS Gaming ROG Zephyrus G14</p>
                  <p><span class="text-muted">Color: </span>Black</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                  <button class="btn btn-light px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <input id="form1" min="0" name="quantity" value="1" type="number"
                    class="form-control form-control-sm" />

                  <button class="btn btn-light px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                  <h5 class="mb-0">27.590.000</h5>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                  <a href="#!" class="text-dark"><i class="fas fa-trash fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>

          

          <div class="card mb-4">
            <div class="card-body p-4 d-flex flex-row">
              <div class="form-outline flex-fill">
                <input type="text" id="form1" class="form-control form-control-lg" placeholder="10 ĐIỂM!!!" />
                <label class="form-label h5" for="form1">Discound code</label>
              </div>
              <button type="button" class="btn btn-outline-dark btn-lg ms-3">Apply</button>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-dark btn-block btn-lg">Proceed to Pay</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
<?php
include('inc/footer.php');
?>