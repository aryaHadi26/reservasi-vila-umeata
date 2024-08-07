<div class="site-blocks-cover overlay" style="background-image: url(images/umeata.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade">
        <span class="caption mb-3">Dari Kami</span>
        <h1 class="mb-4">Events</h1>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
	<!-- -->
     <?php
      // $sql=mysqli_query($conn,"SELECT galeri.*,kamar.* FROM galeri INNER JOIN kamar ON kamar.No_Kamar = galeri.No_Kamar");
      // while($data = mysqli_fetch_array($sql)){
      ?>
	  <!-- -->
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/events1.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="#">Outbound Package</a></h2>
          <p>Hiasan Untuk UME ATA VILLA punya banyak pilihan paket. Cocok buat kamu yang pengen privacy.</p>
          <p>Segera Hubungi 0811-471-815 karena tempat terbatas.</p>
        </div>
      </div>
	  <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/events2.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="#">Celebrate Your Wedding</a></h2>
          <p>Paket wedding super hemat 100 Pax di UME ATA VILLA.</p>
          <p>Hubungi 0811-417-815 untuk pemesanan dan info lebih lanjut.</p>
        </div>
      </div>
	  <div class="col-md-6 col-lg-4 mb-5">
        <div class="media-with-text">
          <div class="img-border-sm mb-4">
            <a href="#" class="popup-vimeo image-play">
              <img src="images/events3.jpg" alt="" class="img-fluid">
            </a>
          </div>
          <h2 class="heading mb-0"><a href="#">Costumize Your Own Wedding</a></h2>
          <p>Hanya dengan 9,9 Juta kamu bisa ngerayain hari spesial mu di lokasi yang asik dan keren. Dengan harga segitu kamu juga sudah dapat kamar pengantin loh. yang lebih asik lagi, di ume ata villa kamu dapat tentukan sendiri semua yang kamu inginkan untuk hari spesial mu.</p>
          <p>Kamu bebas memilih catering, tim dekorasi, pembawa acara, fotografer sampai dengan pemain musiknya. Hubungi 0811-417-815 untuk pemesanan dan info lebih lanjut.</p>
        </div>
      </div>
	  <!-- --> 
      <?php
      // }
      ?>
	  <!-- -->
    </div>    </div>
	
<div class="site-section block-14 bg-light">
  <div class="container">
</div>
</div>

<!---- Gallery<-- -->
<?php
if(!isset($_GET['id']))
{
?>
<div class="site-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto text-center mb-5 section-heading">
				<h2 class="mb-5">Gallery Ume Ata Villa & Resort</h2>
			</div>
		</div>
		
		<div class="row">
		<?php 
		include "koneksi.php";
		$galeri = mysqli_query ($conn,"select * from galeri2 order by id_galeri2");
		while($sql = mysqli_fetch_array($galeri)){
		 
		?>
			<div class="col-md-4 col-lg-4 mb-6">
				<div class="hotel-room text-center">
					<a class="d-block mb-4 thumbnail"> 
					<a href="images/<?php echo$sql['gambar'] ?>"> 
					<img src="images/<?php echo $sql['gambar'] ?>" alt="Image" class="img-fluid"> </a>
					<div class="p-4">
						<h3 class="heading mb-3"><a href="?page=gallery&id=<?php echo $sql['id_galeri2'] ?>"> <?php echo $sql['nama'] ?></a></h3>
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
}else{
?>
<?php
}
