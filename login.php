<?php
session_start();
include 'koneksi.php';

$error = '';
$success = false;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $recaptcha = $_POST['g-recaptcha-response'];

    if (!empty($username) && !empty($password) && !empty($recaptcha)) {
        $secret = '6LfVHwgqAAAAAJWj89Ae3fuidGJNHqXD6eaCQSH7';
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha");
        $responseKeys = json_decode($response, true);

        if (intval($responseKeys['success']) !== 1) {
            $error = 'Apakah Kamu Robot?';
        } else {
            $em = mysqli_query($conn, "SELECT * FROM pelanggan WHERE password = '$password' AND username = '$username'");
            $data = mysqli_fetch_array($em);

            if (empty($data)) {
                $error = 'Username atau password salah';
            } else {
                $_SESSION["username"] = $data["username"];
                $_SESSION["password"] = $data["password"];
                $_SESSION["id_pelanggan"] = $data["id_pelanggan"];
                $_SESSION["nama"] = $data["nama"];
                $_SESSION["no_hp"] = $data["no_hp"];
                $_SESSION["email"] = $data["email"];

                $success = true;
                echo "<script>alert('Selamat datang " . $_SESSION['nama'] . "'); window.location.href='index.php?page=home';</script>";
            }
        }
    } else {
        $error = 'Apakah Anda Robot ?';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="site-blocks-cover overlay" style="background-image: url(images/umeata.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <span class="caption mb-3">Silahkan Login</span>
                    <h1 class="mb-4">LOGIN</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (!empty($error)) {
        echo "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                $error
              </div>";
    }
    ?>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <br/><br/>
                <h2>HALAMAN LOGIN</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Masukan Username Dan Password</strong>
                </div>
                <div class="panel-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <br/>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="your username" required />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="your password" required />
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LfVHwgqAAAAAHOfka6sv4Osso7SLye1huSmQPhg"></div>
                        <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
