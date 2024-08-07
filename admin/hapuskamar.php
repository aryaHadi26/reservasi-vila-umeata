<?php
  include "connect.php";
  $sqlb = mysqli_query($con, "DELETE from kamar where No_Kamar='$_GET[No_Kamar]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Dihapus !!!');
                    window.location.href='index.php?module=tabelkamar';</script>";
  }else{
    echo "<script>alert('Data Gagal Dihapus !!!');
                    window.location.href='index.php?module=tabeltamu';</script>";
  }
?>