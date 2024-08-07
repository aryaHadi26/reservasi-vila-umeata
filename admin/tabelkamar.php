<h2>Tabel Villa</h2>
<div class="alert alert-info">TABEL DATA VILLA</div>
<A href="index.php?module=inputkamar" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th><h4 align="center">Nomor</h4></th>
<th><h4 align="center">ID Villa</h4></th>
<th><h4 align="center">Nama Villa</h4></th>
<th><h4 align="center">Tipe Villa</h4></th>
<th><h4 align="center">Gambar</h4></th>
<th><h4 align="center">Harga</h4></th>
<th><h4 align="center">Deskripsi</h4></th>
<th><h4 align="center">Status</h4></th>
<th><h4 align="center">Aksi</h4></th>
</tr>


<?php  
include "connect.php";
$sql = mysqli_query($con,"SELECT * FROM kamar");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['No_Kamar'] ?> </td>
<td align="center"><?php echo $row['Jenis'] ?> </td>
<td align="center"><?php echo $row['Type'] ?> </td>
<td style="text-align: center;"><img style="width: 120px;" src="../images/kamar/<?php echo $row['gambar']; ?>"></td>
<td align="center"><?php echo $row['Tarif'] ?> </td>
<td align="center"><?php echo $row['deskripsi'] ?> </td>
<td align="center">
    <form method="post" action="statuskamar.php">
        <input type="hidden" name="No_Kamar" value="<?php echo $row['No_Kamar']; ?>">
        <?php
            if ($row['status'] == 'Tersedia') {
                echo '<button type="submit" name="status" value="Tidak Tersedia" class="btn btn-sm btn-primary">Tersedia</button>';
            } else {
                echo '<button type="submit" name="status" value="Tersedia" class="btn btn-sm btn-warning">Tidak Tersedia</button>';
            }
        ?>
    </form>
</td>

<td align="center">
<a href="index.php?module=editkamar&No_Kamar=<?php echo $row['No_Kamar'];?>"class="btn btn-success">Edit</a>
<a href="index.php?module=hapuskamar&No_Kamar=<?php echo $row['No_Kamar'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 