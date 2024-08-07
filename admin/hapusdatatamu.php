<?php
  include "connect.php";
  $sqlb = mysqli_query($con, "DELETE from tamu where id_pelanggan='$_GET[id_pelanggan]'");
  
  if($sqlb){
  	echo "<script>alert('Data Berhasil Dihapus !!!');
                    window.location.href='index.php?module=tabeltamu';</script>";
  }else{
  	echo "<script>alert('Data Gagal Dihapus !!!');
                    window.location.href='index.php?module=tabeltamu';</script>";
  }
?>