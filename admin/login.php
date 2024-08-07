<?php
session_start();
?>
<head>

<title> Halaman Login </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
			<br/><br/>
			<h2>LOGIN ADMIN</h2>
			</div>
		</div>
	</div>
	<div class="row">
	
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
			<div class="panel panel-default">
		<div class="panel-body">
			<?php 
include 'connect.php';
//menangkap data yang dikirim dari form login

if(isset($_POST["login"])){//jika tombol login di klik
	$Username=$_POST["Username"];
	$Password=($_POST["Password"]);

	if($Username!="" && $Password!=""){
		
		// cek kecocokan Username dan Password
		$em = mysqli_query($con, "SELECT * FROM user where Password = '$Password' AND Username = '$Username'");
		$data = mysqli_fetch_array($em);
		
		if(empty($data)) // Username atau Password salah
		{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
						Username atau Password salah
					</div>";
		}
		else // Username dan Password cocok
		{	
			$_SESSION["Username"]=$data["Username"];
			$_SESSION["Password"]=$data["Password"];
			$_SESSION["namauser"]=$data["namauser"];
			
			// arahkan ke halaman index pasca login
			echo "<script> alert('selamat datang ".$_SESSION['namauser']."'); window.location.href='index.php'; </script>";
		}
	}
	else
	{
		echo "<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
					Username atau Password tidak boleh kosong!
				</div>";
	}
}
?>
		 <form action="" method="POST" enctype="multipart/form-data">
		 <br/>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-tag"></i>Username</span>
				<input type="text" name="Username" class="form-control" placeholder="Silahkan Masukan Username"/>
			</div>
			
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i>Password</span>
				<input type="Password" name="Password" class="form-control" placeholder="Silahkan Masukan Password"/>
			</div>
			
			<center><button type="submit" class="btn btn-primary" name="login"> LOGIN </button></center>
		</form>
		
		</div>
	</div>
</div>
</div>
</div>
</body>