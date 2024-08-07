<?php
include "connect.php";

$jenis = filter_var($_POST['jenis'], FILTER_SANITIZE_STRING);
$deskripsi = filter_var($_POST['deskripsi'], FILTER_SANITIZE_STRING);

//mendapatkan tipe file
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$ukuran_file = $_FILES['gambar']['size'];
$type_file = $_FILES['gambar']['type'];
$path = "../images/fasilitas/".$nama_file;


if(empty($jenis) || empty($deskripsi)){
    echo "<script>alert('Data Tidak Boleh Kosong');
    window.location.href='index.php?module=inputfasilitas';</script>";
}else{
    if($type_file == "image/jpg" || $type_file == "image/jpeg" || $type_file == "image/png"){
        // jika ukuran file lebih kecil dari 1MB
        if($ukuran_file <= 1000000){
            // jika ukuran pas lakukan:
            // proses upload
            $q = mysqli_query($con, "INSERT INTO fasilitas VALUES('','$jenis','$deskripsi','$nama_file')");
            if($q){ //cek jika proses query berhasil atau tidak
                // jika sukses
                move_uploaded_file($tmp_file, $path);
                echo "<script>alert('Data Berhasil Di simpan !!!');
                window.location.href='index.php?module=tabelfasilitas';</script>"; // Redirect ke halaman tabelfasilitas
            }else{
                // jika gagal
                echo "<script>alert('Data Gagal di Simpan !!!');
                window.location.href='index.php?module=inputfasilitas';</script>";
            }
        }else{
            echo "<script>alert('Ukuran File tidak Boleh Lebih dari 1MB !!!');
            window.location.href='index.php?module=inputfasilitas';</script>";
        }
    }else{
        echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG !!!');
        window.location.href='index.php?module=inputfasilitas';</script>";
    }
}
?>