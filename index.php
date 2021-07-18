<?php 
  session_start();

  include 'sendemail.php'; 

  $_SESSION["index"] = true;
?>

<!doctype html>
<html lang="en" id="awal">
  <head>

    <title>Ardent Auto Detailing</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- My CSS -->
    <link rel="stylesheet" href="css/utama.css">
    <link rel="stylesheet" href="css/font.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

  </head>
  <body>

    <!-- <section id="Navbar">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand mr-0 p-0" href="#awal">
                    <img class="logo-atas" src="img/index/logo-navbar.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="#about"><span>About</span></a>
                    <a class="nav-link active" href="#proses"><span>Process</span></a>
                    <a class="nav-link active" href="#portfolio"><span>Portfolio</span></a>
                    <a class="nav-link active" href="#product"><span>Product</span></a>
                    <a class="nav-link active" href="#service"><span>Service</span></a>
                    <a class="nav-link active" href="#kontak"><span>Contact</span></a>
                  </div>
                  <div class="navbar-nav">
                    <a class="btn btn-secondary bg-gradient-secondary text-white" href="login.php" role="button">Sign In</a>
                    <a class="btn btn-warning bg-gradient-warning text-white" href="register.php" role="button">Sign Up</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark pl-2 pr-2 pt-0 pb-0">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo-atas" src="img/index/logo-navbar.png" alt="Logo"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav" style="display: flex; align-items: center;">
            <!-- <li class="nav-item"> -->
              <a class="nav-link active" href="#about"><span>About</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="nav-link active" href="#proses"><span>Process</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="nav-link active" href="#portfolio"><span>Portfolio</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="nav-link active" href="#product"><span>Product</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="nav-link active" href="#service"><span>Service</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="nav-link active" href="#kontak"><span>Contact</span></a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="btn btn-secondary bg-gradient-secondary text-white" href="login.php" role="button">Sign In</a>
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
              <a class="btn btn-warning bg-gradient-warning text-white" href="register.php" role="button">Sign Up</a>
            <!-- </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- <section id="carousel"> -->
      <div class="container-fluid">
          <div class="row">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="3000">
                        <img src="img/index/carousel-1.png" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-lg-block">
                          <blockquote class="blockquote text-right">
                            <p class="mb-0">" A well-known quote, contained in a blockquote element. "</p>
                            <footer class="blockquote-footer"><cite title="Source Title">someone's name</cite></footer>
                          </blockquote>
                        </div> -->
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="img/index/carousel-2.jpg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-lg-block">
                          <blockquote class="blockquote text-right">
                            <p class="mb-0">" A well-known quote, contained in a blockquote element. "</p>
                            <footer class="blockquote-footer"><cite title="Source Title">someone's name</cite></footer>
                          </blockquote>
                        </div> -->
                    </div>
                    <div class="carousel-item" data-interval="3000">
                        <img src="img/index/carousel-3.jpg" class="d-block w-100" height="900px" alt="...">
                        <!-- <div class="carousel-caption d-none d-lg-block">
                          <blockquote class="blockquote text-right">
                            <p class="mb-0">" A well-known quote, contained in a blockquote element. "</p>
                            <footer class="blockquote-footer"><cite title="Source Title">someone's name</cite></footer>
                          </blockquote>
                        </div> -->
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
          </div>
      </div>
    <!-- </section> -->

    <!-- About -->

    <section id="about">
      <div class="parent">
        <div class="child-one">
          <h1 class="about">Tentang Kami</h1>
          <span class="about" style="text-indent: 33px;">Ardent Auto Detailing adalah workshop otomotif di kota Medan yang khusus melakukan makeover dan salon mobil melalui teknologi Nano Ceramic dan turunannya.</span>
          <span class="about pt-2 pb-1">Adapun jasa - jasa yang kami tawarkan yakni :</span>
          <ul>
            <li>Paket full detailing & coating treatment untuk mobil, motor, sepeda dan sejenisnya.
                <ol class="pl-4">
                  <li>Paket Nano Ceramic Coating</li>
                  <li>Paket Signature Nano Glass - Based Coating</li>
                  <li>Paket Signature Nano Diamond Coating</li>
                </ol>
            </li>
            <li>Paket salon dan detailing :
                <ol class="pl-4">
                  <li>Premium Wash</li>
                  <li>
                    <ul class="pl-4" style="list-style-type: disc;">
                      <li>Exterior Detailing (cuci jamur body, kaca & dekontaminasi kimia)</li>
                      <li>Interior Detailing</li>
                      <li>Machine Detailing</li>
                    </ul>
                  </li>
                  <li>Car Fogging</li>
                  <li>Cuci Uap</li>
                  <li>Car Coating Maintenance</li>
                </ol>
            </li>
            <li>
              Jasa ketok dan repaint 
            </li>
          </ul>
        </div>
        <div class="child-two">
          <img src="img/index/about.png" alt="" style="width: 100%; height: 100%;">
        </div>
      </div>
    </section>

    <!-- Akhir About -->

    <section id="content-1">
      <div class="content-1 container-fluid">
        <div class="content-2 container">
          <div class="row justify-content-center">
            <h1 class="mengajak">Why Ardent Details ?</h1>
          </div>
          <div class="row">
            <div class="column-why col-sm-6 col-md-4 col-lg-4">
              <img src="img/index/icon/special.png" alt="">
              <span class="why">
                Specialis dibidang salon mobil, nano ceramic coating, dan PPF sehingga hasil kerja lebih terjamin
              </span>
            </div>
            <div class="column-why col-sm-6 col-md-4 col-lg-4">
              <img src="img/index/icon/professional.png" alt="">
              <span class="why">
                Dikerjakan oleh tim kerja yang berpengalaman lebih dari 10 tahun dibidangnya
              </span>
            </div>
            <div class="column-why col-sm-6 col-md-4 col-lg-4">
              <img src="img/index/icon/warranty.png" alt="">
              <span class="why">
                Berani memberikan garansi hasil kerja
              </span>
            </div>
            <div class="column-why col-sm-6 col-md-4 col-lg-4">
              <img src="img/index/icon/certificate.png" alt="">
              <span class="why">
                Satu-satunya workshop detailing yang bersertifikat resmi dengan menggunakan obat dari supplier resmi yang berkualitas
              </span>
            </div>
            <div class="column-why col-sm-6 col-md-4 col-lg-4">
              <img src="img/index/icon/quality-control.png" alt="">
              <span class="why">
                Step pengerjaan mobil memiliki SOP yang baku (3-4 hari kerja) dan memiliki quality control yang baik
              </span>
            </div>
            <div class="column-why col-sm-6 col-md-4 col-lg-4">
              <img src="img/index/icon/customer.png" alt="">
              <span class="why">
                Telah memiliki banyak customer yang puas atas hasil kerja kami dan menjadi pelanggan tetap kami
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Proses -->

    <section id="proses">
        <div class="container proses">
          <h1 class="konten3 text-center p-3">Proses Pengerjaan <br> Nano Ceramic Coating Full Treatment</h1>
          <div class="row justify-content-center">
            <h2>Day 1</h2>
          </div>
          <div class="row p-3">
            <div class="col-md-4">
              <img src="img/index/dayone-1.jpg" alt="">
            </div>
            <div class="col-md-4 align-self-center text-center">
              <ul class="pt-3 pb-2">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Premium Wash
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Chemical decontamination on body, glass, wheels, dan celah-celah
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Engine detailing
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <img src="img/index/dayone-2.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-center">
            <h2>Day 2</h2>
          </div>
          <div class="row p-3">
            <div class="col-md-4">
              <img src="img/index/daytwo-1.jpg" alt="">
            </div>
            <div class="col-md-4 align-self-center text-center">
              <ul class="pt-3 pb-2">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Interior detailing
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Paint correction 2-4 steps
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Preparing for coating
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <img src="img/index/daytwo-2.jpeg" alt="">
            </div>
          </div>
          <div class="row justify-content-center">
            <h2>Day 3</h2>
          </div>
          <div class="row p-3">
            <div class="col-md-4">
              <img src="img/index/daythree-1.jpg" alt="">
            </div>
            <div class="col-md-4 align-self-center text-center">
              <ul class="pt-3 pb-2">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Application of Nano Ceramic Coating triple layers
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Buffing
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Curing Booster application
                </li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Finishing
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <img src="img/index/daythree-2.jpeg" alt="">
            </div>
          </div>
          <div class="row justify-content-center">
            <h2>Day 4</h2>
          </div>
          <div class="row p-3">
            <div class="col-md-4 offset-md-4 align-self-center text-center">
              <ul class="pt-3 pb-2">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg> Delivery to customer
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section>

    <!-- Akhir Proses -->

    <!-- Portfolio -->

    <section id="portfolio">
      <div class="portfolio container-fluid">
        <div class="portfolio-2 container">
          <div class="row mr-0 ml-0 justify-content-center">
            <div class="col-md text-center">
              <h1 class="konten3 pb-3"><span style="color: orange;">Hasil</span> Yang Didapatkan</h1>
            </div>
          </div>
          <div class="row mr-0 ml-0 justify-content-center">
          </div>
          <div class="row mr-0 ml-0">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
              <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/kuning-layout.jpg">
                  <img class="portfolio" src="img/index/gallery/kuning.jpg" alt="">
              </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/kuning1-layout.jpg">
                    <img class="portfolio" src="img/index/gallery/kuning1.jpg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/kuning2-layout.jpg">
                    <img class="portfolio" src="img/index/gallery/kuning2.jpg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/kuning3-layout.jpg">
                    <img class="portfolio" src="img/index/gallery/kuning3.jpg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/mesin.jpeg">
                    <img class="portfolio" src="img/index/gallery/mesin-kecil.jpeg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/bangku.jpeg">
                    <img class="portfolio" src="img/index/gallery/bangku-kecil.jpeg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/interior.jpeg">
                    <img class="portfolio" src="img/index/gallery/interior-kecil.jpeg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
                <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/logo.jpeg">
                    <img class="portfolio" src="img/index/gallery/logo-kecil.jpeg" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
              <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/lampu-layout.png">
                  <img class="portfolio" src="img/index/gallery/lampu.png" alt="">
              </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
              <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/kaca.jpeg">
                  <img class="portfolio" src="img/index/gallery/kaca-kecil.jpeg" alt="">
              </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
              <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/Pintu-layout.png">
                  <img class="portfolio" src="img/index/gallery/Pintu.png" alt="">
              </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pl-0 pr-0">
              <a class="fancybox-thumb" rel="fancybox-thumb" href="img/index/gallery/rem.jpeg">
                  <img class="portfolio" src="img/index/gallery/rem-kecil.jpeg" alt="">
              </a>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Featured Product -->

    <!-- Product -->

    <section id="product">
      <div class="product-1 container-fluid">
        <div class="product-2 container">
          <div class="row justify-content-center">
            <div class="col-md text-center">
              <h1 class="konten3">Berbagai Macam Aksesoris Mobil</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-10 text-center">
              <p class="konten-1 text-warning">Kami juga menyediakan berbagai macam aksesoris mobil yang bisa anda beli di toko kami.</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-11">
              <div class="accordion" style="width: 100%;" id="accordionExample">
                <div class="card border-right-0 border-left-0 border-top-0 border-bottom border-warning">
                  <div class="card-header bg-dark" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-center text-decoration-none text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Kain Microfiber
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <img src="img/index/kain-microfiber.jpg" alt="" class="gambar-aksesoris">
                      <p class="konten-1 text-center pr-5 pl-5">Kami menawarkan kain microfiber sebagai alat untuk mengelap dan membersihkan mobil anda. Dengan kualitas superior, tanpa garis pinggir, 40x lebih halus dari pada wol & 100x lebih halus dari pada rambut manusia. Tingkat penyerapannya juga 7x lebih menyerap air dari pada kain biasa atau kain yang terbuat dari karet. Sehingga akan cepat kering & meminimalisir timbulnya bercak air yang membekas atau membentuk jamur pada body mobil. Pemakaian Kain mocrofiber juga lebih awet, tidak menyimpan pasir, debu & kotoran sehingga tidak akan menyebabkan baret.
                      </p> 
                    </div>
                  </div>
                </div>
                <div class="card border-right-0 border-left-0 border-top-0 border-bottom border-warning">
                  <div class="card-header bg-dark" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block collapsed text-center text-decoration-none text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Alas Kaki
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <img src="img/index/alas-kaki.jpg" alt="" class="gambar-aksesoris">
                      <p class="konten-1 text-center pr-5 pl-5">Kami menyediakan alas kaki dari brand ternama, seperti Trapo, Comfort & D'luxe yang kualitasnya tak usah di ragukan lagi. Dan sudah menjadi favorite & pilihan terbaik untuk alas kaki para carholic.</p>
                    </div>
                  </div>
                </div>
                <div class="card border-right-0 border-left-0 border-top-0 border-bottom border-warning">
                  <div class="card-header bg-dark" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block collapsed text-center text-decoration-none text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Kaca Film
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <img src="img/index/kaca-film.jpg" alt="" class="gambar-aksesoris">
                      <p class="konten-1 text-center pr-5 pl-5">Kaca film yang kami tawarkan juga beragam, dan ternama seperti : ORPRO Window Film, V-Gard, 3M Autofilm, WINCOS AUTOMOTIVE FILMS, ICEBERG WINDOW FILMS, SOLAR BLACK WINDOW FILMS, Solar Gard PREMIUM, Solar Gard WINDOW FILMS. Dengan proses pemasangannya yang detail, teliti, dan rapi.</p>
                    </div>
                  </div>
                </div>
                <div class="card border-right-0 border-left-0 border-top-0 border-bottom border-warning">
                  <div class="card-header bg-dark" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block collapsed text-center text-decoration-none text-white btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Jok Mobil
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <img class="gambar-aksesoris" src="img/index/jok-mobil.jpg" alt="">
                      <p class="konten-1 text-center pr-5 pl-5">Jok mobil yang kami tawarkan terbuat dari kulit sintetis dengan kualitas terbaik, tekstur yang sangat halus, sehingga lebih mudah di bersihkan, lebih awet, dan lebih kuat.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Product -->

    <!-- Service -->

    <section id="service">
      <div class="service-1 container-fluid">
        <div class="service-2 container">
          <div class="row justify-content-center">
            <div class="col-md text-center">
              <h1 class="service">Pilihan <span style="color: orange;">Harga Paket</span> Di Salon Mobil Kami</h1>
              <p class="konten-1">Pilihan terbaik untuk anda yang membutuhkan layanan salon mobil dengan cepat  <br> dan tentunya akurat dengan hasil yang memuaskan.</p>
            </div>
          </div>
          <div class="row mt-4 justify-content-center">
            <div class="col-md-8 col-lg-4 mt-4 mb-4">
              <div class="card-service card text-center">
                <div class="card-body">
                  <p class="paket font-weight-bold">Paket Signature Nano Ceramic Coating by Crystal Shield</p>
                  <div class="row">
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
            <div class="col-md-8 col-lg-4">
              <div class="card-service card text-center bg-warning">
                <div class="card-body">
                  <p class="paket font-weight-bold">Paket Signature Diamond Coating by Crystal Shield</p>
                  <div class="row">
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
            <div class="col-md-8 col-lg-4 mt-4">
              <div class="card-service card text-center">
                <div class="card-body">
                  <p class="paket font-weight-bold">Paket Signature Nano Crystal Based Coating by Crystal Shield</p>
                  <div class="row">
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
            <a class="booking" href="login.php">Booking Sekarang</a>
          </div>
          <div class="row mt-4 ml-1 mr-1 justify-content-center">
            <div class="alert alert-light bg-light" role="alert">
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

    <!-- Pertanyaan -->

    <section id="pertanyaan">
      <div class="container pb-5">
        <div class="row pb-3">
          <div class="col-md">
            <h2 class="text-secondary" style="font-family: 'Poppins-Bold'; text-align: center;">Pertanyaan yang Sering Diajukan</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-7">
            <button class="accordion">Apa poin penting keunggulan coating ?</button>
            <div class="panel">
              <p>- Eksterior mobil menjadi lebih mengkilap <br>
                - Resistensi terhadap barang-barang kimia <br>
                - Memiliki efek Water Repellent, meminimalisir terhadap kerak air dan jamur <br>
                - Meminimalisir pudarnya cat mobil akibat sinar UV</p>
            </div>
            <button class="accordion">Kenapa harus memilih coating? Apa bedanya dengan wax?</button>
            <div class="panel">
              <p class="text-justify">Wax juga merupakan salah satu proses mengangkat warna cat mobil agar kembali terlihat cerah dan kontras. Namun coating adalah paket yang lebih komplit dari pada wax dengan tingkat ketahanan yang jauh lebih lama dari pada wax. Jika sekali wax mungkin warna pada cat mobil hanya akan terlihat cerah dalam hitungan bulan, coating akan membuat warna cat mobil anda terlihat lebih cerah dalam hitungan tahunan. Sehingga akan lebih menghemat biaya perawatan, mobil akan terlihat bagus & menarik untuk waktu yang lama.</p>
            </div>
          </div>
          <div class="col-md-5 d-none d-md-block d-lg-block">
            <img src="img/index/questions.png" alt="" style="width: 100%;">
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Pertanyaan -->
    
    <!-- Kontak -->

    <section id="kontak">
      <div class="kontak container-fluid">
        <div class="container pt-5 pb-5">
          <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-2">
                  <h3 class="hello">Hello!</h3>
              </div>
              <div class="col-sm-12 col-md-9 col-lg-10">
                  <h3 class="isi text-white">Punya pertanyaan atau komentar ? mari kita dengarkan! <br> isi formulir di bawah ini untuk menghubungi kami.</h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-10 offset-md-2">
                  <hr>
              </div>
          </div>
          <div class="row">
              <div class="col-md-8 col-lg-7 offset-lg-2">
                  <form action="" method="post">
                      <!--alert messages start-->
                      <?php echo $alert; ?>
                      <!--alert messages end-->
                      <label for="name">Nama</label><br>
                      <input class="kosong" type="text" id="name" name="name" placeholder="Masukkan nama anda"><br>
                      <label for="email">Email</label><br>
                      <input class="kosong" type="email" id="email" name="email" placeholder="Email address"><br>
                      <label for="phone">Nomor Telepon</label><br>
                      <input class="kosong" type="tel" id="phone" name="phone" placeholder="08xxxxxxxxxx"><br>
                      <label for="message">Pertanyaan atau komentar</label><br>
                      <textarea id="message" cols="30" rows="4" name="message" placeholder="Tuliskan pertanyaan atau saran anda"></textarea><br>
                      <input class="tombol bg-warning" type="submit" name="submit" value="Kirim">
                  </form>
              </div>
              <div class="col-md-4 col-lg-3 mt-4 text-right">
                  <h4 class="nama-toko text-white">Ardent Auto Detailing</h4>
                  <P class="jalan text-white">Komplek Cemara Asri <br> Jl. Boulevard Timur No. 88G <br> Medan, Sumatera Utara.</P>
                  <div class="icon">
                    <a href="https://www.instagram.com/ardentdetails/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                    <a href="https://web.facebook.com/ardentdetails" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://wa.me/628116150309" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
                    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=VpCqJVFfjRzZfbgQwrNvnGzfcwQgdwnDnpMLrCtbQnWhsMmXVkRCcmhBnqzqVRNtNRsLXCv" target="_blank"><i class="fas fa-envelope-square"></i></a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Akhir Kontak -->

    <!-- map -->

    <!-- <section id="map"> -->
      <div class="container-fluid p-0">
        <div class="embed-responsive embed-responsive-21by9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.591951731272!2d98.70278997655944!3d3.6331909041481834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303133b7c414637d%3A0xf91156023a5a9527!2sArdent%20Auto%20Detailing!5e0!3m2!1sid!2sid!4v1622429652379!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    <!-- </section> -->

    <!-- akhir map -->
    
    <button id="myBtn" title="Go to top"><a href="#awal"><i class="fas fa-angle-up fa-2x"></a></i></button>

    <!-- Footer -->

    <section id="footer">
        <div class="footer container-fluid">
            <div class="row p-4">
                <div class="col-sm-4 col-md-4">
                    <a href="#awal">
                    <img src="img/index/logo-navbar.png" width="220" height="60" alt="logo">
                    <div class="logo-bawah">
                        <span >Salon mobil terkenal yang ada di daerah medan. Lebih tepatnya di Komplek Cemara Asri Jl. Boulevard Timur No. 88G</span>
                    </div>
                    </a>
                </div>
                <div class="col-sm-5 offset-sm-3 col-md-5 offset-md-3 text-right align-self-end">
                    <p class="logo-bawah">Customer Service</p>
                    <div class="logo-bawah">
                        <span class="text-success">Telp : (62) 811 6150 309</span>
                    </div>
                    <div class="logo-bawah">
                        <span class="text-success">Whatsapp : (62) 811 6150 309 </span>
                    </div>
                    <div class="logo-bawah">
                        <span class="text-success">ardentautodetailingaad@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Footer -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

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

    <!-- Script send email with php -->
    <script type="text/javascript">
      if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
    </script>

    <!-- Script scrool to top button -->
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    <!-- Script Accordion Pertanyaan-->
    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
    </script>

    <!-- Script fixtop navbar on scroll -->
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 20) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>

  </body>
</html>