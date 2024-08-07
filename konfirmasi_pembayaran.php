<?php
  if(@$_SESSION['username']!=""){
?>
<div class="site-blocks-cover overlay" style="background-image: url(images/umeata.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<span class="caption mb-3">pembayaran</span>
				<h1 class="mb-4">Form Pembayaran</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                            <table class="table">
                                <!-- <tr> -->
                                    <!-- <td><label>ID Pelanggan</label></td> -->
                                    <input type="hidden" class="form-control" name="id_pelanggan" value="<?php echo $_SESSION['id_pelanggan']; ?>">
                                <!-- </tr> -->
                                <tr>
                                    <td><label>Nama</label></td>
                                    <td><input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['nama']; ?>" readonly></td>
                                </tr>
                                <tr>
                                    <td><label>Jumlah Transfer</label></td>
                                    <td><input type="text" class="form-control" name="jumlah_transfer"></td>
                                </tr>
                                <tr>
                                    <td><label>Bank</label></td>
                                    <td>
                                        <input type="text" class="form-control" name="bank">
                                        <input type="hidden" class="form-control" name="status" value='T'>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="jenis_bank">Pilih Jenis Bank</label></td>
                                    <td>
                                        <select required name="jenis_bank" id="jenis_bank" class="form-control" onChange="getkecamatan(this.value)">
                                            <option value="">--Pilih Bank--</option>
                                            <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM jenis_bank");
                                            foreach ($sql as $value) {
                                                ?>
                                                <option value="<?= $value['nama_bank']; ?>"><?= $value['no_rek']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Gambar</label></td>
                                    <td><input type="file" class="form-control" name="gambar"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input class="btn btn-warning" type="submit" name="submit" value="send konfirmasi" />
                                        <button class="btn btn-danger" type="button" onclick="batalkanPesanan()">Batalkan Pesanan</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12"></div>
        </div>
    </div>
</div>


<script>
function batalkanPesanan() {
    if (confirm("Apakah Anda yakin ingin membatalkan pesanan?")) {
        // Lakukan aksi pembatalan pesanan disini, misalnya mengirim permintaan AJAX ke server
		window.location.href = 'index.php?page=reservasi';
        alert("Pesanan telah dibatalkan.");
    }
}
</script>


<?php
include "koneksi.php"; 
	 if(isset($_POST['submit'])){
		$id_pelanggan = $_POST['id_pelanggan'];
		$nama=$_POST['nama'];
		$jumlah_transfer=$_POST['jumlah_transfer'];
		$bank=$_POST['bank'];
		$status=$_POST['status'];
	
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/pembayaran/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database

	$sqlsimpan = mysqli_query($conn, "insert into konfirmasi (id_pelanggan,nama,jumlah_transfer, bank, gambar,status)
	 values
	  ('$id_pelanggan',
      '$nama',
	  '$jumlah_transfer',
	  '$bank',
	  '$nama_file',
	  '$status')");

		if($sqlsimpan){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
		echo "<script>alert('Konfirmasi Pembayaran Anda Telah Berhasil. Admin Kami Akan Mengkonfirmasi Pembayaran Anda !!!');
        window.location.href='index.php';</script>"; // Redirectke halaman index.php
      	}else{
        // Jika Gagal, Lakukan :
        echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.!!!');
		window.location.href='index.php?page=konfirmasi_pembayaran';</script>";
      	}
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "<script>alert('Maaf, Gambar gagal untuk diupload!!!');
	  window.location.href='index.php?page=konfirmasi_pembayaran';</script>";
	}
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
  	echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB!!!')</script>";
   	header("location:?page=konfirmasi_pembayaran");
	}
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.!!!')</script>";
  header("location:?page=konfirmasi_pembayaran");
}
}
}else{
	 echo "<script>alert('Silahkan Login Terlebih Dahulu atau registrasi terlebih dahulu!');
           window.location='index.php?page=login';</script>";
}	
?>