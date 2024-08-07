<?php
	include 'koneksi.php';
    if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$no_hp = $_POST['no_hp'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];

	//Simpan ke DB
	// Cek apakah semua field telah diisi
if (!empty($nama) && !empty($username) && !empty($password) && !empty($no_hp) && !empty($jk) && !empty($alamat) && !empty($email)) {
    $sqlsimpan = mysqli_query($conn, "INSERT INTO pelanggan (nama, username, password, no_hp, jk, alamat, email) VALUES ('$nama', '$username', '$password', '$no_hp', '$jk', '$alamat', '$email')");

    if ($sqlsimpan) {
        echo "<script>
                alert('Data Berhasil Disimpan');
                window.location='index.php?page=login';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan saat menyimpan data.');
                window.location='index.php?page=register';
              </script>";
    }
} else {
    echo "<script>
            alert('Mohon mengisi semua data dengan benar!');
            window.location='index.php?page=register';
          </script>";
}
	}
	// include 'koneksi.php';
    // if(isset($_POST['submit'])){
	// 	$nama = $_POST['nama'];
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// 	$no_hp = $_POST['no_hp'];
	// 	$jk = $_POST['jk'];
	// 	$alamat = $_POST['alamat'];
	// 	$email = $_POST['email'];

	// 	// Hash password sebelum menyimpan ke database
	// 	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// 	// Simpan ke DB
	// 	$sqlsimpan = mysqli_query($conn, "INSERT INTO pelanggan (nama, username, password, no_hp, jk, alamat, email) VALUES ('$nama', '$username', '$hashed_password', '$no_hp', '$jk', '$alamat', '$email')");
	// 	if($sqlsimpan){
	// 	   echo "<script>alert('Data Berhasil Disimpan');
	// 					 window.location='index.php?page=register';
	// 			</script>";
	// 	 } else {
	// 	   echo "<script>alert('Data Gagal Disimpan');
						
	// 			</script>";
	// 	  }
	// }
?>