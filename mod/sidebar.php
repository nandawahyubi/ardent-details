
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
            
            <?php if ($_SESSION["level"] == "user") { ?>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashbord-user.php">
                <div class="sidebar-brand-text mx-3">Ardent Details</div>
            </a>

            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashbord-user.php">
                    <i class="fas fa-home"></i><span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Addons</div>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link pt-2 pb-2" href="booking.php">
                    <i class="far fa-calendar-alt"></i><span>Booking</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 pb-2" href="product.php">
                    <i class="fas fa-shopping-bag"></i><span>Product</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 pb-2" href="history-pesanan.php">
                    <i class="fas fa-history"></i><span>History</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <?php } elseif($_SESSION["level"] == "admin") { ?>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashbord-admin.php">
                <div class="sidebar-brand-text mx-3">Ardent Details</div>
            </a>

            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashbord-admin.php">
                    <i class="fas fa-home"></i><span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Addons</div>

            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link pt-2 pb-2" href="data_user.php">
                    <span>Data User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link pt-2 pb-2" href="data_booking.php">
                    <span>Data Booking</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <?php } ?>

        </ul>
        <!-- End of Sidebar -->