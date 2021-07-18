<?php

    function registrasi ($data) {
        include 'koneksi.php';

        $name       = ucwords(strtolower(stripslashes($data["name"])));
        $email      = strtolower(stripslashes($data["email"]));
        $password   = mysqli_real_escape_string($koneksi, $data["password"]);
        $password2  = mysqli_real_escape_string($koneksi, $data["password2"]);
        $level      = "user";

        //1. cek email apakah sudah ada atau belum
        $result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");

        if( mysqli_fetch_assoc($result)) {
            $_SESSION['error'] = 'Alamat Email ini Sudah Digunakan !';
            header("location:register.php");
            exit;
        }

        //2. cek konfirmasi password
        if( $password !== $password2 ) {
            $_SESSION['error'] = 'Konfirmasi Password Tidak Sesuai !';
            header("location:register.php");
            exit;
        }

        //3. enkripsi password agar sipembuat website tidak tau password dari pemilik akun
        $password = password_hash($password, PASSWORD_DEFAULT);

        //4. tambahkan userbaru ke database
        mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$name', '$email', '$password', '$level')");

        return mysqli_affected_rows($koneksi);//jika berhasil menghasilkan angka 1, jika gagal menghasilkan angka -1

    }

?>