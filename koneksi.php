<?php  

    $koneksi = mysqli_connect("localhost", "root", "", "db_salonmobil");

    if (!$koneksi) {
            die("Connection failed : " . mysqli_connect_error());
    }

?>