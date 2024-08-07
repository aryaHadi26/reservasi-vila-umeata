<?php
include "connect.php";

$No_Kamar = filter_var($_POST['No_Kamar'], FILTER_SANITIZE_STRING);
$Jenis = filter_var($_POST['Jenis'], FILTER_SANITIZE_STRING);
$Type = filter_var($_POST['Type'], FILTER_SANITIZE_STRING);
$Tarif = filter_var($_POST['Tarif'], FILTER_SANITIZE_STRING);
$deskripsi = filter_var($_POST['deskripsi'], FILTER_SANITIZE_STRING);
$status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);

//mendapatkan tipe file
$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$ukuran_file = $_FILES['gambar']['size'];
$type_file = $_FILES['gambar']['type'];
$path = "../images/kamar/".$nama_file;


if(empty($No_Kamar) || empty($Jenis) || empty($Type) || empty($Tarif) || empty($deskripsi) || empty($status)){
    echo "<script>alert('Data Tidak Boleh Kosong');
    window.location.href='index.php?module=inputkamar';</script>";
}else{
    if($type_file == "image/jpg" || $type_file == "image/jpeg" || $type_file == "image/png"){
        // jika ukuran file lebih kecil dari 1MB
        if($ukuran_file <= 1000000){
            // jika ukuran pas lakukan:
            // proses upload
            $q = mysqli_query($con, "INSERT INTO kamar VALUES('$No_Kamar','$Jenis','$Type','$Tarif','$nama_file','$deskripsi','$status')");
            if($q){ //cek jika proses query berhasil atau tidak
                // jika sukses
                move_uploaded_file($tmp_file, $path);
                echo "<script>alert('Data Berhasil Di simpan !!!');
                window.location.href='index.php?module=tabelkamar';</script>"; // Redirect ke halaman tabelkamar
            }else{
                // jika gagal
                echo "<script>alert('Data Gagal di Simpan !!!');
                window.location.href='index.php?module=inputkamar';</script>";
            }
        }else{
            echo "<script>alert('Ukuran File tidak Boleh Lebih dari 1MB !!!');
            window.location.href='index.php?module=inputkamar';</script>";
        }
    }else{
        echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG !!!');
        window.location.href='index.php?module=inputkamar';</script>";
    }
}
?>