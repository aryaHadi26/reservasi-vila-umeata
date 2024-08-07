<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no_kamar = $_POST['No_Kamar'];
    $status = $_POST['status'];

    $sql = "UPDATE kamar SET status='$status' WHERE No_Kamar='$no_kamar'";

    if (mysqli_query($con, $sql)) {
        header("Location: index.php?module=tabelkamar"); // Redirect back to the main page
    } else {
        echo "<script>alert('Gagal update status !!!');
                window.location.href='index.php?module=tabelkamar';</script>";
    }
}
?>