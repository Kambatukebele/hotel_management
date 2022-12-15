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
          <div class="content-wrapper">

             
          <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Today / </span> Connections
              </h4>

              <?php
                  require "latest.php"; 
              ?>

              HERE GOES Content
            <!-- Content -->           

           
         
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card ">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">AVAILABLE ROOMS BY TYPE</h5>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                              ><i class="bx bx-mobile-alt"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Apartment</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">0</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Double Room</h6>
                             
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">0</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Family Room</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">0</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="bx bx-football"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Single Room</h6>
                              
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">0</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="bx bx-football"></i
                            ></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Studio</h6>
                              
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">0</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
               
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">GUESTS</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Staying tonight</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Adults</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/chart.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              
                              <h6 class="mb-0">Children</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>                              
                            </div>
                          </div>
                        </li>
                        <hr>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Arriving today</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Adults</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/chart.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              
                              <h6 class="mb-0">Children</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>                              
                            </div>
                          </div>
                        </li>
                        <hr>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Leaving today</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Adults</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="<?=ROOT_ASSETS_DASHBOARD?>img/icons/unicons/chart.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              
                              <h6 class="mb-0">Children</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0">0</h6>                              
                            </div>
                          </div>
                        </li>
                        
                        
                        
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Rooms Booked Today</span>
                          <h3 class="card-title mb-2">0</h3>                        
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Available Rooms Today</span>
                          <h3 class="card-title mb-2">0</h3>                        
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <span class="fw-semibold d-block mb-1">Pending Rooms Today</span>
                          <h3 class="card-title mb-2">0</h3>                        
                        </div>
                      </div>
                    </div>                   
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

<?php require "includes-dash/footer.php";  ?> 
