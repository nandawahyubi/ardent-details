<?php

    function registrasi ($data) {
        include 'koneksi.php';

        $name       = ucwords(stripslashes($data["name"]));
        $email      = strtolower(stripslashes($data["email"]));
        $password   = mysqli_real_escape_string($koneksi, $data["password"]);
        $password2  = mysqli_real_escape_string($koneksi, $data["password2"]);
        $level      = "user";

        //1. cek email apakah sudah ada atau belum
        $result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");

        if( mysqli_fetch_assoc($result)) {
            echo"<script>
                    alert('Alamat Email ini Sudah Digunakan !');
                </script>";
            return false;
        }

        //2. cek konfirmasi password
        if( $password !== $password2 ) {
            echo"<script>
                    alert('konfirmasi password tidak sesuai !');
                </script>";
            return false;
        }

        //3. enkripsi password agar sipembuat website tidak tau password dari pemilik akun
        $password = password_hash($password, PASSWORD_DEFAULT);

        //4. tambahkan userbaru ke database
        mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$name', '$email', '$password', '$level')");

        return mysqli_affected_rows($koneksi);

    }

?>