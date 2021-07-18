<?php 

include '../koneksi.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once '../phpmailer/Exception.php';
require_once '../phpmailer/PHPMailer.php';
require_once '../phpmailer/SMTP.php';

$mail = new PHPMailer(true);

	$id_pelanggan 	= $_POST['id_pelanggan'];
	$id_kendaraan 	= $_POST['id_kendaraan'];
	$id_booking		= $_POST['id_booking'];
	$nama 		= mysqli_escape_string($koneksi, $_POST['nama']);
	$telp 		= mysqli_escape_string($koneksi, $_POST['nomor-hp']);
	$email 		= mysqli_escape_string($koneksi, $_POST['email']);
	$alamat 	= mysqli_escape_string($koneksi, $_POST['alamat']);
	$merk 		= mysqli_escape_string($koneksi, $_POST['merk']);
	$warna 		= mysqli_escape_string($koneksi, $_POST['warna']);
	$tahun 		= mysqli_escape_string($koneksi, $_POST['startyear']);
	$no_polisi 	= mysqli_escape_string($koneksi, strtoupper(stripslashes($_POST['no-polisi'])));
	$paket 		= mysqli_escape_string($koneksi, $_POST['paket']);
	$dp 		= mysqli_escape_string($koneksi, $_POST['dp']);
	$tanggal 	= mysqli_escape_string($koneksi, $_POST['waktu']);
	$transfer 	= mysqli_escape_string($koneksi, $_POST['transfer']);
	$gambar 	= $_FILES['gambar']['name'];

	$eksenti_diperbolehkan = array('jpg','jpeg','png');
	$x 			= explode(".", $gambar);
	$eksetensi 	= strtolower(end($x));
	$file_temp 	= $_FILES['gambar']['tmp_name'];

	if (in_array($eksetensi,$eksenti_diperbolehkan)) {
		
		$query1 = "INSERT INTO tb_pelanggan (id_pelanggan,nama_pelanggan,email,no_telp,alamat) VALUES 
		('$id_pelanggan','$nama','$email','$telp','$alamat')";
		$query2 = "INSERT INTO tb_kendaraan (id_kendaraan,merk,warna,thn_pembuatan,no_polisi,jenis_paket) VALUES 
		('$id_kendaraan','$merk','$warna','$tahun','$no_polisi','$paket')";
		$query3 = "INSERT INTO tb_booking (id_booking,id_pelanggan,id_kendaraan,dp,jadwal,metode_pembayaran,gbr) VALUES 
		('$id_booking','$id_pelanggan','$id_kendaraan','$dp','$tanggal','$transfer','$gambar')";

			$query_run1 = mysqli_query($koneksi,$query1) or die(mysqli_error($koneksi));
			$query_run2 = mysqli_query($koneksi,$query2) or die(mysqli_error($koneksi));
			$query_run3 = mysqli_query($koneksi,$query3) or die(mysqli_error($koneksi));
			

			if ($query_run1 && $query_run2 && $query_run3) {
				move_uploaded_file($file_temp, "../img/bukti-tf/".$gambar);

				$mail->isSMTP();
				$mail->Host 	= 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'ardentdetails1@gmail.com'; // Gmail address which you want to use as SMTP server
				$mail->Password = 'ardentdetails88888888'; // Gmail address Password
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				$mail->Port 	= '587';

				$mail->setFrom('ardentdetails1@gmail.com'); // Gmail address which you used as SMTP server
				$mail->addAddress('nandawahyubi6121@gmail.com'); // Email address where you want to receive emails

				$mail->isHTML(true);
				$mail->Subject = 'Pesanan Baru Dari Pelanggan';
				$mail->Body = "<table>
									<tr>
										<td>Nama</td>
										<td>: $nama</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: $email</td>
									</tr>
									<tr>
										<td>No Hp</td>
										<td>: $telp</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>: $alamat</td>
									</tr>
									<tr>
										<td>Merk Mobil</td>
										<td>: $merk</td>
									</tr>
									<tr>
										<td>Warna Mobil</td>
										<td>: $warna</td>
									</tr>
									<tr>
										<td>Tahun Pembuatan Mobil</td>
										<td>: $tahun</td>
									</tr>
									<tr>
										<td>No BK</td>
										<td>: $no_polisi</td>
									</tr>
									<tr>
										<td>Jenis Paket</td>
										<td>: $paket</td>
									</tr>
									<tr>
										<td>Dp</td>
										<td>: Rp $dp</td>
									</tr>
									<tr>
										<td>Tanggal Booking</td>
										<td>: $tanggal</td>
									</tr>
								</table>";
				$mail->addAttachment('../img/bukti-tf/'.$gambar);

				$send = $mail->send();

				if($send){
					echo "<script>
						window.location='dashbord-user.php?pesan=berhasil-terkirim';
					</script>";
				}else{
					echo "<script>
						window.location='booking.php?pesan=gagal-terkirim';
					</script>";
				}

				// 	echo "<script>
				// 			alert('Pesanan berhasil terkirim.!!');window.location='dashbord-user.php';
				// 		</script>";
				// } else {
				// 	echo "<script>
				// 			alert('Pesanan gagal terkirim.!!');window.location='booking.php';
				// 		</script>";
			}
	} else {
		echo "<script>
				alert('<?=pesan=format-tidak-sesuai?>');window.history.go(-1);
			</script>";
		}

 ?>