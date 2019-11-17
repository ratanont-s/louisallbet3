<?php include('./_header.php'); ?>

<main id="indexPage">
    <section class="page-banner">
      <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/img/slide-1.png" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/img/slide-2.png" alt="...">
          </div>
        </div>
      </div>
    </section>
    <div class="d-lg-none py-4 bg-dark">

      <div class="container">
        <form action="" class="form-login">
          <h6>เข้าระบบสมาชิก</h6>
          <div class="form-group">
            <input type="tel" class="form-control" placeholder="เบอร์มือถือ">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="PIN / รหัสผ่าน">
          </div>
          <div class="form-row">
            <div class="col-6">
              <button type="submit" class="btn btn-submit btn-block">เข้าระบบ</button>
            </div>
            <div class="col-6">
              <button type="button" class="btn btn-register btn-block">สมัครสมาชิก</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <section class="promotion mt-4 mt-lg-5">
      <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-stretch align-items-lg-end">
          <a href="#" class="promotion-link">
            <img src="./assets/img/promotions/banner-1.png" alt="" class="w-100">
          </a>
          <a href="#" class="promotion-link">
            <img src="./assets/img/promotions/banner-all.png" alt="" class="w-100">
          </a>
          <a href="#" class="promotion-link">
            <img src="./assets/img/promotions/banner-2.png" alt="" class="w-100">
          </a>
        </div>
      </div>
    </section>
  </main>

  <?php include('./_footer.php'); ?>