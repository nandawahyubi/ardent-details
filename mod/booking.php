<?php
    session_start();
    require 'kode.php';

    if (!isset($_SESSION["login"])){
        header("Location: ../login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body id="page-top">

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
            <li class="nav-item active">
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
            <li class="nav-item active">
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

    <?php include 'navbar.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?php include 'mod-booking.php'; ?>
        
        <?php include 'footer.php'; ?>
    </div>
    <!-- End of Begin Page Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle bg-warning" href="#page-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <?php include 'script.php'; ?>
    <?php 
    
    $fts = (isset($_GET['pesan']) ? $_GET['pesan'] : '');
        if ($fts == 'format-tidak-sesuai') {
            echo  "<script type='text/javascript'>
                      const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Format photo tidak sesuai deskripsi.!'
                      })
                  </script>";
        }
    
    ?>

 </body>

 </html>
