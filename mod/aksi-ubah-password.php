<?php 

    session_start();
    include "../koneksi.php";

    $aksi   = $_GET['aksi'];

    if($aksi == "sandi") {
        $id        = $_POST['id_user'];
        $pswdLama  = $_POST['pswdLama'];
        $pswdBaru  = $_POST['pswdBaru'];
        $ulngPswd  = $_POST['ulngPswd'];
    
        $query  = mysqli_query($koneksi,"SELECT * FROM user WHERE id = '$id'");
        $data   = mysqli_fetch_assoc($query);
        $pass   = $data['password'];
    
        if (password_verify($pswdLama, $data['password'])) {
    
            if ($pswdBaru != $ulngPswd) {
                $_SESSION['error'] = 'Password Tidak Sesuai.!';
                header("location:ubah-password.php");
                exit;
            }
            else {
                $pswdBaru   = password_hash($pswdBaru, PASSWORD_DEFAULT);

                mysqli_query($koneksi, "UPDATE user SET password = '$pswdBaru' WHERE id = '$id'");

                return mysqli_affected_rows($koneksi);//jika berhasil menghasilkan angka 1, jika gagal menghasilkan angka -1

                $_SESSION['sukses'] = 'Sandi Berhasil Diubah';
			    header("location:ubah-password.php");
                exit;
            }
        }
        else {
            $_SESSION['error'] = 'Password Lama Tidak Sesuai.!';
            header("location:ubah-password.php");
            exit;
        }
    }
?>