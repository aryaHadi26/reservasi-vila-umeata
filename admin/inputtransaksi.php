<html lang="en">

<head>
    <title>Form Entri Transaksi</title>                        
</head>

<body>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr style="color: black;">
                <td>No Faktur</td>
                <td>:</td>
                <td> <input type="text" name="No_Faktur" id=""> </td>
            </tr>
			 <tr style="color: black;">
                <td>No Kamar</td>
                <td>:</td>
                <td><input type="text" name="No_Kamar" id=""></td>
				</tr>
				<tr style="color: black;">
                <td>No Id</td>
                <td>:</td>
                <td><input type="text" name="No_Id" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><input type="date" name="tgl_masuk" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tanggal Keluar</td>
                <td>:</td>
                <td><input type="date" name="tgl_keluar" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Lama Menginap</td>
                <td>:</td>
                <td><input type="text" name="lama_menginap" id=""></td>
				</tr>
			<tr style="color: black;">
                <td>Tarif</td>
                <td>:</td>
                <td><input type="text" name="Tarif" id=""></td>
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
        $No_Faktur = $_POST['No_Faktur'];
        $No_Kamar = $_POST['No_Kamar'];
        $No_Id = $_POST['No_Id'];
        $tgl_masuk = $_POST['tgl_masuk'];
        $tgl_keluar= $_POST['tgl_keluar'];
        $lama_menginap= $_POST['lama_menginap'];
        $Tarif= $_POST['Tarif'];

        $q = mysqli_query($con, "INSERT INTO transaksi(No_Faktur,No_Kamar,No_Id,tgl_masuk,tgl_keluar,lama_menginap,Tarif) VALUES('$No_Faktur','$No_Kamar','$No_Id','$tgl_masuk','$tgl_keluar','$lama_menginap','$Tarif')");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabeltransaksi';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabeltransaksi';</script>";
        }
    }

    ?>

</body>

</html>