<?php require "includes-dash/head.php"; ?>
<!-- Menu -->

<?php require "includes-dash/sidebar.php"; ?>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
        <!-- Navbar -->

        <?php require "includes-dash/header.php";  ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper mb-3">
                <!-- Content -->


                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header">Details Booking</h5>
                            <div class="card-body">
                                    
                            <div class="row check-availabilty" id="next">
          <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

            <form action="#" method="GET">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="adults" class="font-weight-bold text-black">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adults" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="children" class="font-weight-bold text-black">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="children" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <a href="<?=ROOT?>search"><button type="submit" class="btn btn-primary btn-block text-white">Check Availabilty</button></a>
                </div>
              </div>
            </form>
          </div>


        </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require "includes-dash/footer.php";  ?>