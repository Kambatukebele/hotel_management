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
                                        <h5 class="card-header">All Bookings</h5>
                                        <div class="card-body">
                                                <p>Below you can find out all the bookings and their statuses. Use the Add Booking button to create a booking. To Edit a booking just click on the edit icon.
                                                </p>

                                                <a href="<?=ROOT?>booking/add_booking"><button class="btn btn-success mb-3">Add Booking</button></a>
                                                <!-- Responsive Table -->
                                                <div class="table-responsive text-nowrap">
                                                        <table class="table">
                                                                <thead>
                                                                        <tr class="text-nowrap">
                                                                                <th>ID</th>
                                                                                <th>First Name</th>
                                                                                <th>Last Name</th>
                                                                                <th>Stay From</th>
                                                                                <th>Stay to</th>
                                                                                <th>Nights</th>
                                                                                <th>Rooms</th>
                                                                                <th>Actions</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <th scope="row">3</th>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                                <td>Table cell</td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                </div>
                                        </div>
                                </div>


                        </div>
                </div>

                <?php require "includes-dash/footer.php";  ?>