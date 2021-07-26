<?php
    session_start();

    if (!isset($_SESSION["login"])){
        header("Location: ../login.php");
        exit;
    }

    include '../koneksi.php'; 
    $email  = $_SESSION['email'];
    $query  = mysqli_query($koneksi,"SELECT * FROM user WHERE email = '$email'");
    $tampil = mysqli_fetch_assoc($query);

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
                <form action="aksi-profile.php?aksi=profile" method="post" enctype="multipart/form-data" class="p-0 m-0">
                <?php 
                    include "../koneksi.php";
                    $id     = $_SESSION['id'];
                    $query  = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
                    $data   = mysqli_fetch_assoc($query);
                ?>
                    <div class="bungkus-pp">
                        <div class="profile-pic-div">
                            <img src="../img/pp/<?= $tampil['pp']; ?>" id="photo">
                            <input type="file" id="file" name="foto" value="<?= $tampil['pp']; ?>">
                            <label for="file" id="uploadBtn">Choose Photo</label>
                        </div>
                    </div>
                    <div class="row justify-content-center form">
                        <div class="col-md">
                            <div class="from-grub">
                                <input type="text" hidden name="id_user" id="id_user" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="form-grub">
                                <label class="text-dark">Nama</label>
                                <input type="text" class="form-control" name="nama" 
                                    value="<?php echo $tampil['name']; ?>">
                            </div>
                            <div class="form-grub">
                                <label class="text-dark">Email</label>
                                <input type="text" class="form-control" name="email" 
                                    value="<?php echo $tampil['email']; ?>" readonly>
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
                    <div class="row justify-content-between mt-3 mb-3">
                        <!-- <a href="#" type="submit" class="btn btn-success mt-3 ml-3">Simpan</a>
                        <a href="#" onclick="history.go(-1)" class="btn btn-primary mt-3 mr-3">Kembali</a> -->
                        <button type="submit" class="btn btn-success ml-3">Simpan</button>
                        <button type="button" onclick="history.go(-1)" class="btn btn-primary mr-3">Kembali</button>
                    </div>
                </form>
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
