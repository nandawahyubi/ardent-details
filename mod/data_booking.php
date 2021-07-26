<?php
    session_start();

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
        <li class="nav-item active">
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
            <a class="nav-link pt-2 pb-2" href="history.php">
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
        <li class="nav-item active">
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
        <section id="tabel">
            <div class="row">
                <div class="col-sm">
                    <h3 class="pb-3">Data Booking</h3>
                    <div class="tabel">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Merk</th>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col" class="text-center">Jadwal Booking</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                include '../koneksi.php';

                                $no = 1;

                                $sql = "SELECT * FROM tb_booking INNER JOIN tb_kendaraan ON tb_booking.id_kendaraan = tb_kendaraan.id_kendaraan INNER JOIN tb_pelanggan ON tb_booking.id_pelanggan = tb_pelanggan.id_pelanggan ORDER BY tb_booking.id_booking DESC";
                                
                                $ambilData = mysqli_query($koneksi, $sql);

                                while ($tampilkan = mysqli_fetch_array($ambilData)){ ?>
                                    
                                <tr>
                                    <th><?= $no++ ?></th>
                                    <td><?= $tampilkan['nama_pelanggan'] ?></td>
                                    <td><?= $tampilkan['alamat'] ?></td>
                                    <td><?= $tampilkan['merk'] ?></td>
                                    <td><?= $tampilkan['no_polisi'] ?></td>
                                    <td class='text-center'><?= $tampilkan['jadwal'] ?></td>
                                    <td class='text-center'>
                                        <?php if($tampilkan['status']==0) { ?>
                                            <a onclick = "turn_off()" href="aksi-data_booking.php?id=<?= $tampilkan['id_booking'] ?>" class='badge badge-pill badge-warning' id="matikan">On Progress</a>
                                        <?php } elseif($tampilkan['status']==1) { ?>
                                            <a onclick = "turn_off()" href="aksi-data_booking.php?id=<?= $tampilkan['id_booking'] ?>" class='badge badge-pill badge-success' id="matikan" style="pointer-events: none;">Finish</a>
                                        <?php } ?>
                                    </td>
                                    <td class='text-center'>
                                        <a href='details-in-databooking.php?id=<?= $tampilkan['id_pelanggan'] ?>' style="text-decoration: none;">
                                            <i class='far fa-edit fa-2x text-info'></i>
                                        </a>
                                        <a href='hapus-data.php?aksi=hapus&id=<?= $tampilkan['id_pelanggan'] ?>' style="text-decoration: none;">
                                            <i class="far fa-trash-alt fa-2x text-danger"></i>
                                        </a>
                                    </td>
                                </tr> 
                                    
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </div>
    <!-- End of Begin Page Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle bg-warning" href="#page-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <?php include 'script.php'; ?>

 </body>

 </html>






