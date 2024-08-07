<h2>Tabel Staff</h2>
<div class="alert alert-info">TABEL DATA STAFF</div>
<A href="index.php?module=inputstaf" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th><h4 align="center">Nomor</h4></th>
<th><h4 align="center">Nama</h4></th>
<th><h4 align="center">Foto</h4></th>
<th><h4 align="center">Deskripsi</h4></th>
<th><h4 align="center">Aksi</h4></th>
</tr>


<?php  
include "connect.php";
$sql = mysqli_query($con,"SELECT * FROM staff");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['nama'] ?> </td>
<td style="text-align: center;"><img style="width: 120px;" src="../images/staff/<?php echo $row['gambar']; ?>"></td>
<td align="center"><?php echo $row['deskripsi'] ?> </td>


<td align="center">
<a href="index.php?module=editstaf&id_staff=<?php echo $row['id_staff'];?>"class="btn btn-success">Edit</a>
<a href="index.php?module=hapusstaf&id_staff=<?php echo $row['id_staff'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 