<br>
<br>
<footer class="site-footer">

      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Alamat</h3>
            <p>TIAL, KEC.Salahutu, Kabupaten Maluku Tengah, Maluku</p>
            <h3 class="footer-heading mb-4 text-white">No. Telp</h3>
            <p>0811-471-815</p>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Galeri</h3>
                  <ul class="list-unstyled">
                    <div class="row">
                    <?php 
                    $sql=mysqli_query($conn,"SELECT * FROM kamar");
                    foreach ($sql as $value) {
                      ?>
                            <div class="col-md-6">
                              <li><img class="img-fluid" src="images/kamar/<?= $value['gambar']; ?>" ></li>
                            </div>
                      <?php
                    }
                     ?>
                     </div>
                  </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Media Sosial</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="https://www.facebook.com/" target="_blank" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>

                  <a href="https://www.twitter.com/" target="_blank" class="p-2"><span class="icon-twitter"></span></a>

                  <a href="https://www.instagram.com/umeatavilla?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="p-2"><span class="icon-instagram"></span></a>

                  <a href="https://maps.app.goo.gl/JPDbhyk9xkEsyZ5y9" target="_blank" class="p-2"><span class="icon-map"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
           
          </div>
          
        </div>
      </div>
    </footer>