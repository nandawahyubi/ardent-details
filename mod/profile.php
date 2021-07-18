<?php
    session_start();

    if (!isset($_SESSION["login"])){
        header("Location: ../login.php");
        exit;
    }


    include '../koneksi.php'; 
    $email  = $_SESSION['email'];
    $query  = mysqli_query($koneksi,"SELECT * FROM tb_pelanggan WHERE email = '$email'");
    $tampil = mysqli_fetch_assoc($query);
    // $aksi   = "modul/mod_profil/aksi_profil.php";

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body id="page-top">

    <?php include 'sidebar.php'; ?>

    <?php include 'navbar.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow pp-ua mb-4">
            <div class="card-header d-flex justify-content-between align-items-center text-primary">
                Profile
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400 text-primary"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="ubah-password.php">Ubah Password</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="bungkus-pp">
                    <div class="profile-pic-div">
                        <img src="../img/plch-pp.jpg" id="photo">
                        <input type="file" id="file">
                        <label for="file" id="uploadBtn">Choose Photo</label>
                    </div>
                </div>
                <div class="row justify-content-center form">
                    <div class="col-md">
                        <div class="form-grub">
                            <label class="text-dark">Id Pelanggan</label>
                            <input type="text" class="form-control" hidden name="id_user" 
                                value="<?php echo $id_pel; ?>">
                            <input type="text" class="form-control" name="id" readonly="" 
                                value="<?php echo $tampil['id_pelanggan']; ?>">
                        </div>
                        <div class="form-grub">
                            <label class="text-dark">Nama</label>
                            <input type="text" class="form-control" name="nama" 
                                value="<?php echo $tampil['nama_pelanggan']; ?>">
                        </div>
                        <div class="form-grub">
                            <label class="text-dark">Email</label>
                            <input type="text" class="form-control" name="nama" 
                                value="<?php echo $tampil['email']; ?>">
                        </div>
                        <div class="form-grub">
                            <label class="text-dark">No Telepon</label>
                            <input type="text" class="form-control" name="telp" 
                                value="<?php echo $tampil['no_telp']; ?>">
                        </div>
                        <div class="form-grub">
                            <label class="text-dark">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3"><?php echo $tampil['alamat']; ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <a href="#" class="btn btn-success mt-3 ml-3">Simpan</a>
                    <a href="#" onclick="history.go(-1)" class="btn btn-primary mt-3 mr-3">Kembali</a>
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

 </body>

 </html>
