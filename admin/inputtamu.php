<html lang="en">

<head>
    <title>Form Entri Pelanggan</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>ID Pelanggan</td>
                <td>:</td>
                <td> <input type="text" name="id_pelanggan" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td>:</td>
                <td> <textarea name="alamat" id="" cols="20" rows="5"></textarea> </td>
            </tr>
			<tr style="color: black;">
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td>:</td>
                <td> <input type="text" name="no_hp" id=""> </td>
            </tr>
			<tr style="color: black;">
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name="jk" id="jk"> 
				<option value="">-pilih-</option>
				<option value="pria">Laki-Laki</option>
				<option value="wanita">Perempuan</option>
			</tr>
            <tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="SIMPAN">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET"> 
				
				</td>
            </tr>
        </form>
    </table>

    <?php
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $id_pelanggan = $_POST['id_pelanggan'];
        $nama = $_POST['nama'];
        $alamat= $_POST['alamat'];
        $email= $_POST['email'];
        $no_hp= $_POST['no_hp'];
        $jk = $_POST['jk'];

        $q = mysqli_query($con, "INSERT INTO pelanggan VALUES('$id_pelanggan','$nama','$alamat','$email','$no_hp','$jk')");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabeltamu';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabeltamu';</script>";
        }
    }

    ?>

</body>

</html>