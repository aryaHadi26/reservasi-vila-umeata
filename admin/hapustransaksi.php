<?php
  include "connect.php";
  $sqlb = mysqli_query($con, "DELETE from transaksi where No_Faktur='$_GET[No_Faktur]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='index.php?module=tabeltransaksi';</script>";
  }else{
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='index.php?module=tabeltransaksi';</script>";
  }
?>