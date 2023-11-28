<?php include('includes/header.php'); ?>

    <div class="container-fluid px-4">
        <h1 class="mt-5 ">Admin Dashboard</h1>
            <div class="row">

            <!----------------- to diplay the number of customers ------------------------->
                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body text-center">
                            <h3>Total Number of Users </h3>
                            <?php
                            require 'config/conn.php';

                            $query = "SELECT user_type FROM users WHERE user_type = 'user' ";
                            $run_query = mysqli_query($conn, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' .$row. '</h1>'
                            ?>
                        </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="user-list.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            <!----------------- to diplay the number of Staffs ----------------------------->

                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body text-center">
                        <h3>Total Number of staffs </h3>
                            <?php
                            require 'config/conn.php';

                            $query = "SELECT id FROM staff ORDER BY id  ";
                            $run_query = mysqli_query($conn, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' .$row. '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="all-staff.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>  

                <!----------------- to diplay the number of booking ----------------------------->

                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body text-center">
                        <h3>Total Number of booking </h3>
                            <?php
                            require 'config/conn.php';

                            $query = "SELECT id FROM booking ORDER BY id  ";
                            $run_query = mysqli_query($conn, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' .$row. '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="all-booking.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>  
            </div>
    </div>
<?php include('includes/scripts.php'); ?>