<?php
  include "connect.php";
  $sqlb = mysqli_query($con, "DELETE from fasilitas where id_fasilitas='$_GET[id_fasilitas]'");
  
  if($sqlb){
    echo "<script>alert('Data Berhasil Dihapus !!!');
                    window.location.href='index.php?module=tabelfasilitas';</script>";
  }else{
    echo "<script>alert('Data Gagal Dihapus !!!');
                    window.location.href='index.php?module=tabeltamu';</script>";
  }
?>