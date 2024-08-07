<h2>Tabel Fasilitas</h2>
<div class="alert alert-info">TABEL DATA FASILITAS</div>
<A href="index.php?module=inputfasilitas" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th><h4 align="center">Nomor</h4></th>
<th><h4 align="center">Jenis</h4></th>
<th><h4 align="center">Deskripsi</h4></th>
<th><h4 align="center">Gambar</h4></th>
<th><h4 align="center">Aksi</h4></th>
</tr>


<?php  
include "connect.php";
$sql = mysqli_query($con,"SELECT * FROM fasilitas");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['jenis'] ?> </td>
<td align="center"><?php echo $row['deskripsi'] ?> </td>
<td style="text-align: center;"><img style="width: 120px;" src="../images/fasilitas/<?php echo $row['gambar']; ?>"></td>

<td align="center">
<a href="index.php?module=editfasilitas&id_fasilitas=<?php echo $row['id_fasilitas'];?>"class="btn btn-success">Edit</a>
<a href="index.php?module=hapusfasilitas&id_fasilitas=<?php echo $row['id_fasilitas'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 