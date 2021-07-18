        <section id="details">
            <!-- Page Heading -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-italic text-primary">Detile Pesanan Customer</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <h3 class="text-center">Data Pelanggan</h3>
                            <div class="form-grub mb-2">
                                <label>Id Pelanggan</label>
                                <input type="text" name="" readonly="" class="form-control" value="<?php echo $id_Pelanggan; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Nama Pelanggan</label>
                                <input type="text" name="" readonly="" class="form-control" value="<?php echo $tampilkan['nama_pelanggan']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Email</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['email']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>No Telepon</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['no_telp']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Alamat</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['alamat']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <h3 class="text-center">Data Kendaraan</h3>
                            <div class="form-grub mb-2">
                                <label>Merk Mobil</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['merk']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Warna</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['warna']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Tahun Pembuatan</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['thn_pembuatan']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Nomor Polisi</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['no_polisi']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Paket</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['jenis_paket']; ?>">
                            </div>
                            <div class="form-grub mb-2">
                                <label>Jadwal</label>
                                <input type="text" name="" class="form-control" readonly="" value="<?php echo $tampilkan['jadwal']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 d-flex flex-column align-self-center align-items-center">
                            <!-- <div class="row d-flex flex-column justify-content-center text-center"> -->
                                <!-- <h3 class="text-center">Bukti Transfer</h3> -->
                                <div class="form-grub mt-3 mb-3">
                                    <!-- <label style="color: black;"><b>Rekening</b></label> <br> -->
                                    <a class='fancybox-thumb' rel='fancybox-thumb' href='../img/bukti-tf/<?=$tampilkan['gbr']; ?>'>
                                        <img src="../img/bukti-tf/<?= $tampilkan['gbr']; ?>" style="height: auto; width: 100%;">
                                    </a>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <br><br>
                    <button class="btn btn-danger" onclick="history.back(-1)">Kembali</button>
                </div>
            </div>
        </section>