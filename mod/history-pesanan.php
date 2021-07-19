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
            <li class="nav-item active">
                <a class="nav-link pt-2 pb-2" href="#">
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
        <section id="tabel" class="pb-4">
            <h3 class="pb-3">Riwayat Pesanan</h3>
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
                    <th scope='col' class="text-center">Details</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include '../koneksi.php';

                  $email = $_SESSION['email'];

                  $no = 1;

                  $sql = "SELECT * FROM tb_booking INNER JOIN tb_kendaraan ON tb_booking.id_kendaraan = tb_kendaraan.id_kendaraan INNER JOIN tb_pelanggan ON tb_booking.id_pelanggan = tb_pelanggan.id_pelanggan WHERE email = '$email'";
                  $ambilData = mysqli_query($koneksi, $sql);

                  while ($tampilkan = mysqli_fetch_array($ambilData)) {
                    echo "  
                              <tr>
                                  <th>$no</th>
                                  <td>$tampilkan[nama_pelanggan]</td>
                                  <td>$tampilkan[alamat]</td>
                                  <td>$tampilkan[merk]</td>
                                  <td>$tampilkan[no_polisi]</td>
                                  <td class='text-center'>$tampilkan[jadwal]</td>
                                  <td class='text-center'>
                                      <a href='details-user.php?id=$tampilkan[id_pelanggan]'>
                                          <i class='fas fa-eye fa-2x'></i>
                                      </a>
                                  </td>
                              </tr> ";

                    $no++;
                  }

                  ?>
                </tbody>

              </table>
          </div>
        </section>
        
        <?php include 'footer.php'; ?>
    </div>
    <!-- End of Begin Page Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle bg-warning" href="#page-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <?php include 'script.php' ?>

 </body>

 </html>