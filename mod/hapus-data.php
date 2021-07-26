<?php 
    session_start();
    include '../koneksi.php';

    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];
    } else {
        $aksi = "";
    }

    $aksi           = $_GET['aksi'];
    $id_Pelanggan   = $_GET['id'];
    
    if($aksi == "hapus"){

        $query_delete = mysqli_query($koneksi, "DELETE tb_booking,tb_kendaraan,tb_pelanggan FROM tb_booking LEFT JOIN tb_kendaraan ON tb_booking.id_kendaraan=tb_kendaraan.id_kendaraan LEFT JOIN tb_pelanggan ON tb_booking.id_pelanggan=tb_pelanggan.id_pelanggan WHERE tb_booking.id_pelanggan= '$id_Pelanggan'");

        if($query_delete){
            $_SESSION['sukses'] = 'Data Booking Berhasil Dihapus !';
            header("location:data_booking.php");
            exit;
        }else{
            $_SESSION['error'] = 'Data Booking Gagal Dihapus !';
            header("location:data_booking.php");
            exit;
        }
    }
        
?>