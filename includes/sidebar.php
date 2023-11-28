<div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" style = "background-color: #116178" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link text-white" href="index.php">
                        <div class="sb-nav-link-icon text-white">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed text-white " href="#" data-bs-toggle="collapse" data-bs-target="#collapseBooking" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon text-white">
                            <i class="fa-solid fa-book"></i>
                        </div>
                        Booking
                        <div class="sb-sidenav-collapse-arrow text-white">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse " id="collapseBooking" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link text-white" href="all-booking.php">All booking</a>
                            <a class="nav-link text-white" href="add-booking.php">Add booking</a>
                        </nav>
                    </div>

                    <a class="nav-link text-white" href="all-staff.php">
                        <div class="sb-nav-link-icon text-white">
                            <i class="fa-solid fa-clipboard-user"></i>
                        </div>
                        Staffs
                    </a>

                    <a class="nav-link text-white" href="user-list.php">
                        <div class="sb-nav-link-icon">
                            <i class="fa-solid fa-users text-white"></i>
                        </div>
                        User list
                    </a>
                </div>
            </div>
        </nav>
    </div>
</main>