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
                    <li><a href="<?= ROOT ?>home">Home</a></li>
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

<!-- SECTION LITTLE MESSAGE -->

<section class="section pb-0 w-100 mb-4">
    <div class="container shadow bg-success text-white py-2 rounded ">
        <h6 class="text-center">Awesome choice! You're getting a great deal with your rate. </h6>
    </div>
</section>
<!-- END SECTION LITTLE MESSAGE -->
<section class="section pb-0 w-100 mb-4">
    <div class="container d-flex">
        <aside class="w-25 p-3 border border-light shadow" style="height: 600px;">
            <div>
                <p>Check In</p>
                <h6>Wednesday, Dec 14 2022</h6>
                <p>From 12:00:00</p>
            </div>
            <div>
                <p>Check Out</p>
                <h6>Wednesday, Dec 14 2022</h6>
                <p>Until 12:00:00</p>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>Twin Room</h6>
                </div>
                <div>
                    <h6>$2000</h6>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>Adults</h6>
                </div>
                <div>
                    <h6>2 Person</h6>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>Room Size</h6>
                </div>
                <div>
                    <h6>2 Person</h6>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>No of Room</h6>
                </div>
                <div>
                    <h6>1</h6>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>14.5 % Tax</h6>
                </div>
                <div>
                    <h6>$290</h6>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>7 % Service Charge</h6>
                </div>
                <div>
                    <h6>$140</h6>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center  my-3">
                <div class="w-50">
                    <input style="height: 37px;" class="w-100" type="text">
                </div>
                <div class="w-50">
                    <a class="w-100" href=""><button class="w-100 btn-danger text-white border-0 py-1">Apply Code</button></a>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between align-items-center border-bottom border-secondary mb-1">
                <div>
                    <h6>Total Price</h6>
                </div>
                <div>
                    <h6 style="color: green;">$2000</h6>
                </div>
        </aside>
        <div class="w-75 p-3">
            <!-- Basic Layout & Basic with Icons -->

            <!-- Basic Layout -->

            <div class="card mb-4">
                <div style="background-color: white;" class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Enter Your Details </h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Company</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                </div>
                                <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Special Requests</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary text-white" style="background-color:#5F61E6;border:none">Book Now!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
</section>






<?php
require "includes/footer.php";
?>