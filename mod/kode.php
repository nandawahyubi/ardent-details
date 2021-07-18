<?php 

include '../koneksi.php';

  $query = "SELECT max(id_pelanggan) as maxkode FROM tb_pelanggan";
  $hasil = mysqli_query($koneksi, $query);
  $data = mysqli_fetch_array($hasil);
  $kodeBarang = $data['maxkode'];

  $noUrut = (int) substr($kodeBarang, 3, 3);

  $noUrut++;
  $char = "PLG";
  $kodeBarang = $char . sprintf("%03s",$noUrut);

  ?>

  <?php

  $query2 ="SELECT max(id_kendaraan) as maxkode FROM tb_kendaraan";
  $hasil2 = mysqli_query($koneksi, $query2);
  $data2 = mysqli_fetch_array($hasil2);
  $kodeBarang2 = $data2['maxkode'];

  $noUrut2 = (int) substr($kodeBarang2, 3, 3);

  $noUrut2++;
  $char2 = "MBL";
  $kodeBarang2 = $char2 . sprintf("%03s",$noUrut2);

  ?>

  <?php 

  $query3 ="SELECT max(id_booking) as maxkode FROM tb_booking";
  $hasil3 = mysqli_query($koneksi, $query3);
  $data3 = mysqli_fetch_array($hasil3);
  $kodeBarang3 = $data3['maxkode'];

  $noUrut3 = (int) substr($kodeBarang3, 3, 3);

  $noUrut3++;
  $char3 = "BKG";
  $kodeBarang3 = $char3 . sprintf("%03s",$noUrut3);

?>