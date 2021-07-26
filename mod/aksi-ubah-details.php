<?php 
    session_start();
    include '../koneksi.php';

    $id_Pelanggan   = $_GET['id'];
    $aksi           = $_GET['aksi'];

    if($aksi == "ubah-details"){
        $id_pel     = $_POST['id_pel'];
        $merk       = $_POST['merk'];
        $warna      = $_POST['warna'];
        $thn_pem    = $_POST['startyear'];
        $bk         = $_POST['bk'];
        $jns_pkt    = $_POST['jns_pkt'];
        $jadwal     = $_POST['jadwal'];

        $cek_tgl 	= mysqli_query($koneksi, "SELECT * FROM tb_booking WHERE jadwal = '$jadwal'");
        $cek 		= mysqli_fetch_row($cek_tgl);

        if ($cek > 1) {

            $_SESSION['info'] = "Booking Ditanggal Ini Sudah Penuh Mohon Pilih Tanggal Lain";
            header("location:details-in-databooking.php?id=$id_pel");
            exit;

        } else {
            $query = mysqli_query($koneksi, "UPDATE tb_booking INNER JOIN tb_kendaraan ON tb_booking.id_kendaraan = tb_kendaraan.id_kendaraan Set tb_kendaraan.merk='$merk', tb_kendaraan.warna='$warna', tb_kendaraan.thn_pembuatan='$thn_pem', tb_kendaraan.no_polisi='$bk', tb_kendaraan.jenis_paket='$jns_pkt', tb_booking.jadwal='$jadwal' WHERE id_pelanggan = '$id_Pelanggan'");

            if($query){
                $_SESSION['sukses'] = 'Data Booking Berhasil Diubah !';
                header("location:details-in-databooking.php?id=$id_pel");
                exit;
            }else{
                $_SESSION['error'] = 'Data Booking Gagal Diubah !';
                header("location:details-in-databooking.php?id=$id_pel");
                exit;
            }
        }
    }
        
?>