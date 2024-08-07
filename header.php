<?php
  session_start();
 ?>

<div class="site-navbar-wrap js-site-navbar bg-white">
  
  <div class="container">
    <div class="site-navbar bg-black">
      <div class="py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href="index.php"><img src="images/logoVilla.png" width="200" height="150"></a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                
                <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="">
                    <a href="index.php">Home</a>
                  </li>
                  <li class=""><a href="index.php?page=kegiatan">Event</a></li>
                  <li class="has-children ">
                    <a href="?page=fasilitas">Fasilitas</a>
                    <ul class="dropdown arrow-top">
                    <?php
                    $sql=mysqli_query($conn,"SELECT * FROM fasilitas");
                    foreach ($sql as $value) {
                      ?>
                      <li><a href="?page=fasilitas&jenis=<?= $value['jenis']; ?>"><?= $value['jenis']; ?></a></li>
                      <?php
                    }
                     ?>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a href="index.php?page=kamar">Villa</a>
                    <ul class="dropdown arrow-top">
                    <?php
                    $sql=mysqli_query($conn,"SELECT kamar.Jenis FROM kamar");
                    foreach ($sql as $value) {
                    ?>
                      <li><a href="?page=kamar&jenis=<?= $value['Jenis']; ?>"><?= $value['Jenis']; ?></a></li>
                    <?php
                    }
                    ?>
                    </ul>
                  </li>
                    <li class="has-children ">
                        <a href="?page=reservasi">Pesan</a>
                        <ul class="dropdown arrow-top">
                          <li class=""><a href="index.php?page=reservasi">Booking</a></li>
                          <li class=""><a href="index.php?page=konfirmasi_pembayaran">Konfirmasi Pembayaran</a></li>
                          <li class=""><a href="index.php?page=cetak">Cetak Pembayaran</a></li>                          
                            </ul>
                          </li>
			        <li class=""><a href="index.php?page=contact">Kontak</a></li>
              <?php 
                  if (@$_SESSION["username"]==""){  
              ?>
                          <li class="has-children">
                        <a href="index.php?page=login">Daftar/Login</a>
                        <ul class="dropdown arrow-top">
                          <li class=""><a href="index.php?page=login">Login</a></li>
                          <li class=""><a href="index.php?page=register">Register</a></li>                          
                            </ul>
                          </li>
                          <?php 
                            } else { ?>
                          <li><a href="logout.php">Logout</a></li>

                            <?php 


                            }

                          ?>
                    </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>