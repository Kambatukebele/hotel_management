<?php
    require "includes/header.php"; 
?>
 <!-- END head -->

 <section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Choose your Room</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="<?=ROOT?>home">Home</a></li>
              <li>&bullet;</li>
              <li>Search</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->

<section class="section bg-light pb-0"  >
      <div class="container">
       
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
    </section>

    <section class="section pb-0 w-100" style="margin-bottom:100px;">
        <div class="container d-flex justify-content-between align-items-center w-100 shadow" style="margin: 20px auto;">
            <div class="w-25 p-3 rounded">
                <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="Responsive image">
            </div>
            <div>
                <h5>Twin Room</h5>
                <h6>Non-refundable, Breakfast included </h6>
                <h5>2 Adults  0 children</h5>
               
            </div>
            <div>
                <h4>$2000/night</h4>
                <p>Free cancellation</p>
                <a href=""><button class="btn btn-primary btn-block text-white">Select</button></a>
            </div>
        </div>
        <div class="container d-flex justify-content-between align-items-center w-100 rounded shadow">
            <div class="w-25 p-3 rounded">
                <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWwlMjByb29tfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="Responsive image">
            </div>
            <div>
                <h5>Twin Room</h5>
                <h6>Non-refundable, Breakfast included </h6>
                <h5>2 Adults  0 children</h5>
               
            </div>
            <div>
                <h4>$2000/night</h4>
                <p>Free cancellation</p>
                <a href=""><button class="btn btn-primary btn-block text-white">Select</button></a>
            </div>
        </div>
    </section>

<?php
  require "includes/footer.php"; 
?>