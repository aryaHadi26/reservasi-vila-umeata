<?php
include "connect.php";

$nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
$deskripsi = filter_var($_POST['deskripsi'], FILTER_SANITIZE_STRING);

//mendapatkan tipe file
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$ukuran_file = $_FILES['gambar']['size'];
$type_file = $_FILES['gambar']['type'];
$path = "../images/staff/".$nama_file;


if(empty($nama) || empty($deskripsi)){
    echo "<script>alert('Data Tidak Boleh Kosong');
    window.location.href='index.php?module=inputstaf';</script>";
}else{
    if($type_file == "image/jpg" || $type_file == "image/jpeg" || $type_file == "image/png"){
        // jika ukuran file lebih kecil dari 1MB
        if($ukuran_file <= 1000000){
            // jika ukuran pas lakukan:
            // proses upload
            $q = mysqli_query($con, "INSERT INTO staff VALUES('','$nama_file','$nama','$deskripsi')");
            if($q){ //cek jika proses query berhasil atau tidak
                // jika sukses
                move_uploaded_file($tmp_file, $path);
                echo "<script>alert('Data Berhasil Di simpan !!!');
                window.location.href='index.php?module=tabelstaf';</script>"; // Redirect ke halaman tabelstaf
            }else{
                // jika gagal
                echo "<script>alert('Data Gagal di Simpan !!!');
                window.location.href='index.php?module=inputstaf';</script>";
            }
        }else{
            echo "<script>alert('Ukuran File tidak Boleh Lebih dari 1MB !!!');
            window.location.href='index.php?module=inputstaf';</script>";
        }
    }else{
        echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG !!!');
        window.location.href='index.php?module=inputstaf';</script>";
    }
}
?>