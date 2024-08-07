<?php 
include "connect.php" ;
$bulan_ini = date("m-Y");
?>
<body onLoad="javascript:print()"> 
<style type="text/css">
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
    <table width="100%">
	<tr>
		<td><div align="center">
		<div align="center">Cetak Data Per-bulan : <?= $bulan_ini ?></div>
		</div>
		</td>
	</tr>
	</table>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No Faktur</th>
      <th scope="col">No Kamar</th>
      <th scope="col">No ID</th>
	  <th scope="col">Nama</th>
	  <th scope="col">Tanggal Masuk</th>
	  <th scope="col">Tanggal Keluar</th>
	  <th scope="col">Lama Menginap</th>
	  <th scope="col">Tarif</th>
	  <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  	<?php  
	include "connect.php";
	$sql = mysqli_query($con,"SELECT * FROM transaksi");
	$no=1;
	$total=0;
	while($row=mysqli_fetch_array($sql)){
	$total=$row['lama_menginap'] * $row['Tarif'];
	?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $row['No_Faktur'] ?></td>
      <td><?= $row['No_Kamar'] ?></td>
      <td><?= $row['id_pelanggan'] ?></td>
	  <td><?= $row['Nama'] ?></td>
	  <td><?= $row['tgl_masuk'] ?></td>
	  <td><?= $row['tgl_keluar'] ?></td>
	  <td><?= $row['lama_menginap'] ?></td>
	  <td>Rp. <?= $row['Tarif'] ?></td>
	  <td>Rp. <?= $total ?></td>
    </tr>
  </tbody>
<?php
$no++;
};
?>
</table> 
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="FFFFFF">
<tr>
 <td width="63%" bgcolor="#FFFFFF">
 <p align ="right"></p><br/>
 </td></tr>

 
 <td width="37%" bgcolor="#FFFFFF">
<div align="right"> <?php $tanggal= date('d M Y');
	echo " $tanggal";?><br/>
	Pemilik
	<br></br>
	<br></br>
	(no name)
	</br>
	</td>
	</tr>
</div>
</table>