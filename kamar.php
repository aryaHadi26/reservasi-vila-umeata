<?php
if (!isset($_GET['jenis'])) {
?>
<div class="site-blocks-cover overlay" style="background-image: url(images/umeata.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<span class="caption mb-3">Ume Ata Villa & Resort</span>
				<h1 class="mb-4">Semua Villa</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Villa Yang Tersedia</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$sql=mysqli_query($conn,"SELECT * FROM kamar");
			foreach ($sql as $value) {
			?>
			<div class="col-md-6 col-lg-4 mb-5" >
				<div class="hotel-room text-center" >
					<a href="#" class="d-block mb-0 thumbnail"><img src="images/kamar/<?= $value['gambar']; ?>" alt="Image" class="img-fluid" ></a>
					<div class="hotel-room-body"  >
						<h3 class="heading mb-0"><a href="#"><?= $value['Jenis']; ?></a></h3>
						<strong class="price">Rp.<?= $value['Tarif']; ?> / per malam</strong></br>
						<strong class="price"><?= $value['deskripsi']; ?> </strong>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<div class="row mt-5">
			<div class="col-md-12 text-center">
				<div class="site-block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}else {
?>
<div class="site-blocks-cover overlay" style="background-image: url(images/umeata.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-7 text-center" data-aos="fade">
				<span class="caption mb-3">Ume Ata Villa & Resort</span>
				<h1 class="mb-4">Villa</h1>
			</div>
		</div>
	</div>
</div>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Villa yang Tersedia</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$sql=mysqli_query($conn,"SELECT * FROM kamar WHERE Jenis='$_GET[jenis]'");
			foreach ($sql as $value) {
			?>
			<div class="col-md-12 col-lg-12 mb-12">
				<div class="hotel-room text-center">
					<a href="#" class="d-block mb-0 thumbnail"><img src="images/kamar/<?= $value['gambar']; ?>" alt="Image" class="img-fluid"></a>
					<div class="hotel-room-body">
						<h3 class="heading mb-0"><a href="#"><?= $value['Jenis']; ?></a></h3>
						<strong class="price">Rp.<?= $value['Tarif']; ?> / per malam</strong></br>
						<strong class="price"><?= $value['deskripsi']; ?> </strong></br>
						<strong class="price">
						<?php
						if ($value['status'] == 'Tersedia') {
							echo '<span style="background-color: green; color: black;" class="badge">' . $value['status'] . '</span>';
						} else {
							echo '<span style="background-color: yellow; color: black;" class="badge">' . $value['status'] . '</span>';
						}
						?>
						</strong>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
}