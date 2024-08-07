<?php
  include "connect.php";
  $sqlb = mysqli_query($con, "DELETE from staff where id_staff='$_GET[id_staff]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Di Dihapus !!!');
                    window.location.href='index.php?module=tabelstaf';</script>";
  }else{
    echo "<script>alert('Data Gagal Di Dihapus !!!');
                    window.location.href='index.php?module=tabelstaf';</script>";
  }
?>