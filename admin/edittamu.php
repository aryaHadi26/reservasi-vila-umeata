<?php 
include 'connect.php';
$id=$_GET['id_pelanggan'];
$sql= mysqli_query($con,"select * from pelanggan where id_pelanggan='$id'");
$data=mysqli_fetch_array($sql);
?>

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
                <td> <input type="text" name="id_pelanggan" id="" value="<?php echo $data['id_pelanggan']?>" readonly> </td>
            </tr>
			 <tr style="color: black;">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?php echo $data['nama']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="" value="<?php echo $data['alamat']?>"></td>
            </tr>
			<tr style="color: black;">
                <td>Asal</td>
                <td>:</td>
                <td><input type="text" name="email" id="" value="<?php echo $data['email']?>" readonly></td>
				</tr>
			<tr style="color: black;">
                <td>No Telpon</td>
                <td>:</td>
                <td> <input type="text" name="no_hp" id="" value="<?php echo $data['no_hp']?>"> </td>
            </tr>
			<tr style="color: black;">
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><select name="jk" id="jk"> 
				<option value="">-pilih-</option>
				<option value="pria">Pria</option>
				<option value="wanita">Wanita</option>
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

        $q = mysqli_query($con, "UPDATE pelanggan set id_pelanggan='$_POST[id_pelanggan]',nama='$_POST[nama]',alamat='$_POST[alamat]',email='$_POST[email]',no_hp='$_POST[no_hp]',jk='$_POST[jk]' where id_pelanggan='$_POST[id_pelanggan]'");
		
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