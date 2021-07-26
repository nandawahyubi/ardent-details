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
            <!-- Service -->
            <section id="service">
              <div class="service-1 container-fluid">
                <div class="service-2 container">
                  <div class="row justify-content-center">
                    <h1 class="service">Pilihan <span style="color: orange;">Harga Paket</span> Di Salon Mobil Kami</h1>
                    <p class="konten-1">Pilihan terbaik untuk anda yang membutuhkan layanan salon mobil dengan cepat dan tentunya akurat dengan hasil yang memuaskan.</p>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-12 col-lg-4 mt-4 mb-4">
                      <div class="card-service card text-center">
                        <div class="card-body">
                          <p class="paket font-weight-bold">Paket Signature Nano Ceramic Coating by Crystal Shield</p>
                          <div class="row" style="color: black;">
                            <div class="col-sm-4 col-md-4">
                              Small
                              <h6>Rp 2.999.000</h6>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              Medium
                              <h6>Rp 3.499.000</h6>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              Large
                              <h6>Rp 3.999.000</h6>
                            </div>
                          </div>
                          <p class="card-text text-left">✓ Ketahanan coating 3 tahun, 1 Year Warranty <br>
                            ✓ Fitur coating Glossy, Warna lebih terangkat & Hydrophobic <br>
                            ✓ Area coating: Semua bagian exterior <br>
                            ✓ Detailing exterior & Paint Correction 3 steps <br>
                            ✓ Interior & Machine Bay detailing <br>
                            ✓ Finishing</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                      <div class="card-service card text-center bg-warning">
                        <div class="card-body">
                          <p class="paket font-weight-bold">Paket Signature Diamond Coating by Crystal Shield</p>
                          <div class="row" style="color: black;">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              Small
                              <h6>Rp 5.999.000</h6>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              Medium
                              <h6>Rp 6.999.000</h6>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              Large
                              <h6>Rp 7.999.000</h6>
                            </div>
                          </div>
                          <p class="card-text text-left">✓ Ketahanan coating 5 tahun, 3 Year Warranty <br>
                            ✓ Fitur coating Warna Cat Terlihat Basah (wetlook), Glossy, Deep & Hydrophobic <br>
                            ✓ Area coating: Semua bagian exterior & Bagian Interior yang berbahan kulit. <br>
                            ✓ Detailing exterior & Paint Correction 3 steps <br>
                            ✓ Interior & Machine Bay detailing <br>
                            ✓ Finishing</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mt-4">
                      <div class="card-service card text-center">
                        <div class="card-body">
                          <p class="paket font-weight-bold">Paket Signature Nano Crystal Based Coating by Crystal Shield</p>
                          <div class="row" style="color: black;">
                            <div class="col-sm-4 col-md-4">
                              Small
                              <h6>Rp 4.499.000</h6>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              Medium
                              <h6>Rp 4.999.000</h6>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              Large
                              <h6>Rp 5.499.000</h6>
                            </div>
                          </div>
                          <p class="card-text text-left">✓ Ketahanan coating 3-5 tahun, 2 Year Warranty <br>
                            ✓ Fitur coating Super Glossy (Seperti kaca) & Hydrophobic <br>
                            ✓ Area coating: Semua bagian exterior <br>
                            ✓ Detailing exterior & Paint Correction 3 steps <br>
                            ✓ Interior & Machine Bay detailing <br>
                            ✓ Finishing</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4 mb-4 justify-content-center">
                    <a class="booking" href="booking.php">Booking Sekarang</a>
                  </div>
                  <div class="row mt-4 justify-content-center">
                    <div class="alert bg-transparent" role="alert">
                      <h4 class="alert-heading text-center note" style="color: black;">Keterangan :</h4>
                      <table class="table table-borderless text-center" style="color: black;">
                        <thead>
                          <tr>
                            <th scope="col">Small</th>
                            <th scope="col">Medium</th>
                            <th scope="col">Large</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="pt-0 pb-0">Agya, Jazz, Yaris, Brio, dll</td>
                            <td class="pt-0 pb-0">CRV, HRV, Innova, Rush, Almaz</td>
                            <td class="pt-0 pb-0">Fortuner, Pajero, Alphard, LC</td>
                          </tr>
                        </tbody>
                      </table>
                      <hr>
                      <p class="mb-0 text-center text-dark"><b>Semua paket diatas sudah termasuk : </b><br>
                        - Premium wash <br>
                        - Dekontaminasi kimia bodi mobil (pembersihan getah, aspal, dll) <br>
                        - Exterior detailing (pembersihan kerak2 dan jamur) <br>
                        - Interior detailing (pembersihan daki2 interior) <br>
                        - Mesin bay detailing (pembersihan ruang mesin) <br>
                        - Paint correction (polish mobil 3 step sampai catnya bersih dan memunculkan warna asli mobil) <br>
                        - Coating Nano Ceramic 3 layer sesuai paket yg diambil <br>
                        - Finishing <br>
                        <b class="text-dark" style="text-decoration: underline;">Proses 3 - 4 hari kerja</b></p>
                    </div>
                  </div>
                </div>
              </div>
            </section> 

            <!-- Akhir Service -->
        
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