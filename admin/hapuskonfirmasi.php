<?php
  include "connect.php";
  $sqlb = mysqli_query($con, "DELETE from konfirmasi where id_konfirmasi='$_GET[id_konfirmasi]'");
  
  if($sqlb){
  	echo "<script>alert('Data Berhasil Dihapus !!!');
                    window.location.href='index.php?module=konfirmasi';</script>";
  }else{
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='index.php?module=konfirmasi';</script>";
  }
?>