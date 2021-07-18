<?php

  session_start();

  if (!isset($_SESSION ["login"])){
      header("Location: login.php");
      exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard</title>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/after-login.css">
    <link rel="stylesheet" href="css/fonts.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    
    
    
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <?php if ($_SESSION["level"] == "user") { ?>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="after-login.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i> -->
          </div>
          <div class="sidebar-brand-text mx-3">Ardent Details</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="after-login.php">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Addons</div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link pt-2 pb-2" href="booking.php">
            <i class="far fa-calendar-alt"></i>
            <span>Booking</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link pt-2 pb-2" href="product.php">
            <i class="fas fa-shopping-bag"></i>
            <span>Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link pt-2 pb-2" href="history.php">
            <i class="fas fa-history"></i>
            <span>History</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <?php } elseif($_SESSION["level"] == "admin") { ?>

          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="mod/dashbord-admin.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i> -->
          </div>
          <div class="sidebar-brand-text mx-3">Ardent Details</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="mod/dashbord-admin.php">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Addons</div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link pt-2 pb-2" href="mod/data_user.php">
            <!-- <i class="far fa-calendar-alt"></i> -->
            <span>Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link pt-2 pb-2" href="mod/data_booking.php">
            <!-- <i class="fas fa-shopping-bag"></i> -->
            <span>Data Booking</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <?php } ?>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userdropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucwords($_SESSION['name']); ?></span>
                  <!-- <img class="img-profile rounded-circle" src="img/4.png" /> -->
                  <i class="fas fa-user text-dark" style="font-size: 25px; display: block;"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userdropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <!-- <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a> -->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <section id="carousel">
              <div id="carouselExampleFade" class="carousel slide carousel-fade mb-3" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/1.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <div class="col-md">
                          <h1 class="slogan">Mewah <br> Dan <br> Berkarisma</h1>
                          <p class="merek text-warning">Ardent Auto Detailing.</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/2.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h1 class="slogan">Berkualitas <br> Tinggi</h1>
                          <p class="merek text-warning">Ardent Auto Detailing.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/4.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h1 class="slogan">Lebih Pede <br> Dan <br> Berani</h1>
                          <p class="merek text-warning">Ardent Auto Detailing.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
            </section>

            <!-- <section id="content-1">
              <div class="content-1 mb-3 pt-4 pb-4 pl-5 pr-5">
                <div class="row justify-content-center">
                  <h1 class="mengajak">Kenapa harus kami ?</h1>
                  <p class="rayu text-center mb-0">Hanya di toko kami yang melayani segala masalah pada body mobil anda<br> dengan rincian yang sangat baik dan memuaskan. Apa saja yang anda butuhkan untuk perawatan mobil anda, <br> kami menyediakan semuanya hanya di Ardent Auto Detailing.</p>
                </div>
              </div>
            </section> -->

            <section id="portfolio">
              <div class="portfolio">
                <div class="portfolio-2">
                  <div class="row mr-0 ml-0 justify-content-center">
                    <h1 class="konten3 pt-3 pb-3"><span style="color: orange;">Hasil</span> Yang Didapatkan</h1>
                  </div>
                  <div class="row mr-0 ml-0 justify-content-center">
                  </div>
                  <div class="row mr-0 ml-0">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                      <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/kuning-layout.jpg">
                          <img class="portfolio" src="img/gallery/kuning.jpg" alt="">
                      </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/kuning1-layout.jpg">
                            <img class="portfolio" src="img/gallery/kuning1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/kuning2-layout.jpg">
                            <img class="portfolio" src="img/gallery/kuning2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/kuning3-layout.jpg">
                            <img class="portfolio" src="img/gallery/kuning3.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/mesin.jpeg">
                            <img class="portfolio" src="img/gallery/mesin-kecil.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/bangku.jpeg">
                            <img class="portfolio" src="img/gallery/bangku-kecil.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/interior.jpeg">
                            <img class="portfolio" src="img/gallery/interior-kecil.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/logo.jpeg">
                            <img class="portfolio" src="img/gallery/logo-kecil.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                      <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/lampu-layout.png">
                          <img class="portfolio" src="img/gallery/lampu.png" alt="">
                      </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/kaca.jpeg">
                            <img class="portfolio" src="img/gallery/kaca-kecil.jpeg" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/Pintu-layout.png">
                            <img class="portfolio" src="img/gallery/Pintu.png" alt="">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                        <a class="fancybox-thumb" rel="fancybox-thumb" href="img/gallery/rem.jpeg">
                            <img class="portfolio" src="img/gallery/rem-kecil.jpeg" alt="">
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>

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
                    <a class="booking" href="booking.php" >Booking Sekarang</a>
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

            <!-- map -->
            <section id="map">
              <div class="container-fluid p-0">
                <div class="embed-responsive embed-responsive-21by9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.591951731272!2d98.70278997655944!3d3.6331909041481834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303133b7c414637d%3A0xf91156023a5a9527!2sArdent%20Auto%20Detailing!5e0!3m2!1sid!2sid!4v1622429652379!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </section>
            <!-- akhir map -->

            <!-- Footer -->
            <footer class="sticky-footer text-white bg-dark">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright &copy; Ardent Details | Salon Mobil</span>
                </div>
              </div>
            </footer>
            <!-- End of Footer -->
          </div>
          <!-- End of Begin Page Content -->
        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle" href="#page-top">
      <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <!-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> -->
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

    <!-- Photo -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>

    <script>$(document).ready(function() {
      $(".fancybox-thumb").fancybox({
        prevEffect	: 'none',
        nextEffect	: 'none',
        helpers	: {
          title	: {
            type: 'outside'
          },
          thumbs	: {
            width	: 50,
            height	: 50
          }
        }
      });
    });</script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        $act = (isset($_GET['pesan']) ? $_GET['pesan'] : '');
        if ($act == 'login') {
            echo    "<script type='text/javascript'>
                    Swal.fire({
                        position: 'Center',
                        icon: 'success',
                        title: 'Selamat !<br>Anda Berhasil Login',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    </script>";
        } else {
            echo "unknown";
        }
    ?>

  </body>
</html>
