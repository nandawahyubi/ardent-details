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

    <?php include 'sidebar.php'; ?>

    <?php include 'navbar.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4" style="max-width:300px; font-family:'Poppins-Regular';">
            <div class="card-header text-primary">
                Ubah Password
            </div>
            <div class="card-body">
                <div class="row justify-content-center form">
                    <div class="col-md">
                        <div class="form-grub mb-3">
                            <label for="" class="text-dark p-0 m-0">Sandi Lama</label>
                            <div class="gabung d-flex align-items-center position-relative">
                                <input type="password" class="form-control form-control-sm" id="pswdLama">
                                <i class="far fa-eye-slash position-absolute" id="hide" onclick="pswdLama()"></i>
                                <i class="far fa-eye position-absolute" id="show" onclick="pswdLama()"></i>
                            </div>
                        </div>
                        <div class="form-grub mb-3">
                            <label for="" class="text-dark p-0 m-0">Sandi Baru</label>
                            <div class="gabung d-flex align-items-center position-relative">
                                <input type="password" class="form-control form-control-sm" id="pswdBaru">
                                <i class="far fa-eye-slash position-absolute" id="hide2" onclick="pswdBaru()"></i>
                                <i class="far fa-eye position-absolute" id="show2" onclick="pswdBaru()"></i>
                            </div>
                        </div>
                        <div class="form-grub mb-3">
                            <label for="" class="text-dark p-0 m-0">Ulangi Sandi</label>
                            <div class="gabung d-flex align-items-center position-relative">
                                <input type="password" class="form-control form-control-sm" id="ulngPswd">
                                <i class="far fa-eye-slash position-absolute" id="hide3" onclick="ulngPswd()"></i>
                                <i class="far fa-eye position-absolute" id="show3" onclick="ulngPswd()"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row sim-kem">
                    <a href="#" class="btn btn-success ml-3">Simpan</a>
                    <a href="#" onclick="history.go(-1)" class="btn btn-primary mr-3">Kembali</a>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php' ?>
    </div>
    <!-- End of Begin Page Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle" href="#page-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <?php include 'script.php'; ?>

    <script>
        function pswdLama() {
            var x = document.getElementById("pswdLama");
            if (x.type === "password") {
                x.type = "text";
                document.getElementById('hide').style.display = "inline-block";
                document.getElementById('show').style.display = "none";
            }
            else{
                x.type = "password";
                document.getElementById('hide').style.display = "none";
                document.getElementById('show').style.display = "inline-block";
            }
        }

        function pswdBaru() {
            var x = document.getElementById("pswdBaru");
            if (x.type === "password") {
                x.type = "text";
                document.getElementById('hide2').style.display = "inline-block";
                document.getElementById('show2').style.display = "none";
            }
            else{
                x.type = "password";
                document.getElementById('hide2').style.display = "none";
                document.getElementById('show2').style.display = "inline-block";
            }
        }

        function ulngPswd() {
            var x = document.getElementById("ulngPswd");
                if (x.type === "password") {
                    x.type = "text";
                    document.getElementById('hide3').style.display = "inline-block";
                    document.getElementById('show3').style.display = "none";
                }
                else {
                    x.type = "password";
                    document.getElementById('hide3').style.display = "none";
                    document.getElementById('show3').style.display = "inline-block";
                }
        }
    </script>

 </body>

 </html>
