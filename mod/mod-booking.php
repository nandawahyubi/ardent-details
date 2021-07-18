<section id="pembayaran">
            <div class="background">
                <div class="row justify-content-center pt-4 pb-3 m-0">
                    <h1>Pemesanan</h1>
                </div>
                
                <form action="aksi.php" method="post" enctype="multipart/form-data">
                  <!-- Data Pelanggan -->
                  <h5 class="step-1 pl-5">Data Pelanggan</h5>
                  <input type="text" hidden name="id_pelanggan" value="<?php echo $kodeBarang; ?>">
                  <input type="text" hidden name="id_kendaraan" value="<?php echo $kodeBarang2; ?>">
                  <input type="text" hidden name="id_booking" value="<?php echo $kodeBarang3; ?>">
                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Masukkan nama lengkap anda" value="<?php echo ucwords($_SESSION['name']); ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="nomor-hp">Nomor Hp</label>
                      <input type="tel" class="form-control form-control-sm" id="nomor-hp" name="nomor-hp" placeholder="Masukkan nomor handphone anda" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Masukkan alamat email anda" value="<?php echo strtolower($_SESSION['email']); ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control alamat" rows="2" id="alamat" name="alamat" placeholder="Masukkan alamat tempat tinggal anda" required></textarea>
                  </div>
                  <hr class="isi">
                  <!-- Akhir Data Pelanggan -->

                  <!-- Data Kendaraan -->
                  <h5 class="step-1 pl-5">Data Kendaraan</h5>
                  <div class="form-group">
                      <label for="merk">Merek</label>
                      <input type="text" class="form-control form-control-sm" id="merk" name="merk" placeholder="Merek Kendaraan" required>
                      <small id="disable-value" class="form-text text-muted">*Contoh : Honda CR-V</small>
                  </div>
                  <div class="form-group">
                      <label for="warna">Warna</label>
                      <input type="text" class="form-control form-control-sm" id="warna" name="warna" placeholder="Warna Kendaraan" required>
                  </div>
                  <div class="form-group">
                      <label for="tahun-pembuatan">Tahun Pembuatan</label>
                      <select class="form-control form-control-sm tahun-pembuatan" name="startyear" id="startyear" required>
                      <option value="">Pilih Tahun Pembuatan</option>
                        <?php
                        for ($year = (int)date('Y'); 1900 <= $year; $year--): ?>
                            <option value="<?=$year;?>"><?=$year;?></option>
                        <?php endfor; ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="no-polisi">No Polisi</label>
                      <input type="text" class="form-control form-control-sm" id="no-polisi" name="no-polisi" placeholder="Plat nomor kendaraan" required>
                  </div>
                  <hr class="isi">
                  
                  <!-- Akhir Data Kendaraan -->

                  <!-- Jenis-Jenis Paket -->
                  <div class="form-group">
                    <label>Paket Yang Dipilih</label>
                    <div class="row">
                      <div class="col-sm">
                        <div class="row">
                          <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="paket" id="sncc" value="Signature Nano Ceramic Coating by Crystal Shield" style="margin-top: 6px;" required>
                                <label class="form-check-label" for="sncc">Signature Nano Ceramic Coating by Crystal Shield
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="paket" id="sncbc" value="Signature Nano Crystal Based Coating by Crystal Shield" style="margin-top: 6px;" required>
                                <label class="form-check-label" for="sncbc">Signature Nano Crystal Based Coating by Crystal Shield
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="paket" id="sdc" value="Signature Diamond Coating by Crystal Shield" style="margin-top: 6px;" required>
                                <label class="form-check-label" for="sdc">Signature Diamond Coating by Crystal Shield
                                </label>
                              </div>
                          </div>
                          <div class="col-sm-2">
                              <a href="dashbord-user.php#service" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" target="_blank">Lihat Paket</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="isi">
                  <!-- Akhir Jenis-jenis Paket -->

                  <!-- Data Tahap 2 -->
                  <h5 class="step-1 pl-5 mt-5">Booking</h5>
                  <input type="hidden" name="dp" id="dp" value="300000">
                  <fieldset disabled>
                    <div class="form-group">
                        <label for="booking">DP</label>
                        <input type="text" id="rupiah" name="booking" class="form-control form-control-sm"  style="max-width:200px; text-align: right;" value="<?php 
                                //membuat format rupiah dengan PHP
                                function rupiah($angka){
                                
                                $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
                                return $hasil_rupiah;
                                
                                }
                                
                                echo rupiah(300000);

                                ?>">
                        <small id="disable-value" class="form-text text-muted">*NB : Jumlah dp sudah di tentukan</small>
                    </div>
                  </fieldset>

                    <div class="form-group">
                        <label for="waktu">Pilih Jadwal</label><br>
                        <input type="date" id="dateControl" name="waktu" class="form-control form-control-sm" style="max-width:200px; height: 35px; border-radius: 5px; border: none;" required>
                        <small id="disable-value" class="form-text text-muted">*NB : Mohon untuk menyerahkan unit di pagi hari (opsi 8.30 - 18.00)</small>
                    </div>

                    <div class="form-group">
                      <Label for=transfer>Metode Pembayaran</Label>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="transfer" name="transfer" value="transfer" onclick="document.getElementById('gambar').style.display = 'block'" required>
                        <label class="custom-control-label" for="transfer" style="padding-top: 2px;">Transfer</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <div class="collapse" id="gambar" style="display: none;">
                          <div class="card card-body" style="margin-left: 30px;">
                            <img src="../img/bca.png" height="50" alt="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Button trigger modal -->
                    <div class="row">
                    <button style="margin: auto;" type="button" name="proses" class="btn btn-success mb-4" data-toggle="modal" data-target="#staticBackdrop">Proses</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title text-dark" id="staticBackdropLabel">Selesaikan Pesanan Anda !</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="container-fluid">
                                  <div class="row justify-content-center text-center">
                                      <div class="col-sm-12 col-md-7 justify-content-center">
                                          <img src="../img/modal-rek.jpg" width="100%" height="150" alt="">
                                      </div>
                                  </div>
                                  <div class="row justify-content-center text-center">
                                      <div class="col-sm-12">
                                          <small style="color: black;">Silahkan transfer ke alamat rekening yang tertera sebesar <br> <b>Rp 300.000</b> dan jangan lupa upload bukti transfer beserta nama pemilik rekening anda dibawah ini.</small>
                                      </div>
                                  </div>
                                  <div class="row mt-3 mb-3">
                                      <div class="col-sm-12">
                                          <form>
                                              <div class="form-group">
                                                  <input type="file" class="form-control-file" id="enter-file" name="gambar" style="border: 1px solid black; padding: 3px;" required><small id="disable-value" class="form-text text-muted">*NB : Format photo jpg, jpeg dan png</small>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer justify-content-center">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-success" name="submit">Kirim</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </section>