<?php 

    session_start();
    include "../koneksi.php";

    $aksi   = $_GET['aksi'];

    if($aksi == "profile") {
        $id        = $_POST['id_user'];
        $nama      = $_POST['nama'];
        $email     = $_POST['email'];
        $telp      = $_POST['telp'];
        $alamat    = $_POST['alamat'];
        $foto 	   = $_FILES['foto']['name'];
        $temp 	   = $_FILES['foto']['tmp_name'];

        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
    
        
    
        if($foto == ''){

            $query  = mysqli_query($koneksi,"UPDATE user SET name='$nama', no_telp='$telp', alamat='$alamat' WHERE id='$id'");

            if ($query) {
                $_SESSION['sukses'] = 'Data Profile Berhasil Diubah !';
                header("location:profile.php");
                exit;
            }
            else {
                $_SESSION['error'] = 'Data Profile Gagal Diubah !';
                header("location:profile.php");
                exit;
            }
        }
        elseif(in_array($ekstensi,$ekstensi_diperbolehkan)){

            $query  = mysqli_query($koneksi,"UPDATE user SET name='$nama', no_telp='$telp', alamat='$alamat', pp='$foto' WHERE id='$id'");

            move_uploaded_file($temp, "../img/pp/".$foto);

            if ($query) {
                $_SESSION['sukses'] = 'Data Profile Berhasil Diubah !';
                header("location:profile.php");
                exit;
            }
            else {
                $_SESSION['error'] = 'Data Profile Gagal Diubah !';
                header("location:profile.php");
                exit;
            }
        }else{
            $_SESSION['error'] = 'Format Photo Tidak Sesuai !';
            header("location:profile.php");
            exit;
        }
    }
?>