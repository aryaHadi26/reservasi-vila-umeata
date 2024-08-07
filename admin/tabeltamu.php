<h2>Tabel Pelanggan</h2>
<div class="alert alert-info">TABEL DATA TAMU</div>
<!-- <A href="index.php?module=inputtamu" class="btn btn-primary">Tambah Data</a> -->
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>No Id</th>
<th>Nama</th>
<th>Alamat</th>
<th>Email</th>
<th>No Telpon</th>
<th>Jenis Kelamin</th>
<th>Aksi</th>
</tr>


<?php  
include "connect.php";
$sql = mysqli_query($con,"select * from pelanggan");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['id_pelanggan'] ?> </td>
<td align="center"><?php echo $row['nama'] ?> </td>
<td align="center"><?php echo $row['alamat'] ?> </td>
<td align="center"><?php echo $row['email'] ?> </td>
<td align="center"><?php echo $row['no_hp'] ?> </td>
<td align="center"><?php echo $row['jk'] ?> </td>


<td align="center">
<a href="index.php?module=edittamu&id_pelanggan=<?php echo $row['id_pelanggan'];?> "class="btn btn-success">Edit</a>
<a href="index.php?module=hapusdatatamu&id_pelanggan=<?php echo $row['id_pelanggan'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 