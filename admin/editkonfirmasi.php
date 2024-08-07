<?php 
include 'connect.php';
$id=$_GET['id_konfirmasi'];
$sql= mysqli_query($con,"select * from konfirmasi where id_konfirmasi='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>KONFIRMASI</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
			 
				<tr style="color: black;">
                <td>ID KONFIRMASI</td>
                <td>:</td>
                <td><input type="text" name="id_konfirmasi" id="" value="<?php echo $data['id_konfirmasi']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>Id_Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="id_pelanggan" id="" value="<?php echo $data['id_pelanggan']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?php echo $data['nama']?>"></td>
				</tr>
			<tr style="color: black;">
                <td>jumlah transfer</td>
                <td>:</td>
                <td><input type="text" name="jumlah_transfer" id="" value="<?php echo $data['jumlah_transfer']?>"></td>
				</tr>
            <tr style="color: black;">
                <td>Bank</td>
                <td>:</td>
                <td><input type="text" name="bank" id="" value="<?php echo $data['bank']?>"></td>
                </tr>
            <tr>
                <tr style="color: black;">
                <td>Status Pembayaran</td>
                <td>:</td>
                <td>
                <select class="custom-select" style="width: 100%; padding: 10px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" name="status" id="dropdown">
                    <option selected><?= $data['status'] ?></option>
                    <option value="Lunas">Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                </select></td>
                </tr>
                <td></td>
                <td></td>
                <td> 
				<input type="submit" name="submit" id="" class="btn btn-success" value="KONFIRMASI">
                <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET"> 
				
				</td>
            </tr>
        </form>
    </table>

    <?php
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $id_konfirmasi = $_POST['id_konfirmasi'];
        $id_pelanggan = $_POST['id_pelanggan'];
        $jumlah_transfer = $_POST['jumlah_transfer'];
        $bank = $_POST['bank'];
        $status= $_POST['status'];

        $q = mysqli_query($con, "UPDATE konfirmasi set id_pelanggan='$_POST[id_pelanggan]',
            jumlah_transfer='$_POST[jumlah_transfer]',
            bank='$_POST[bank]',
            status='$_POST[status]'
            where id_konfirmasi='$_POST[id_konfirmasi]'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Dikonfirmasi');
			window.location.href='index.php?module=konfirmasi';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=konfirmasi';</script>";
        }
    }

    ?>

</body>

</html>