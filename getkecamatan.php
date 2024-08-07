<?php 
    include_once "config/koneksi.php"; 
    $kab =isset($_GET['kab'])?$_GET['kab']:""; 
    if($kab!="") 
    { 
        $sql="SELECT * FROM kamar  WHERE No_Kamar='$kab'"; 
        $hasil=mysqli_query($conn,$sql); 
?>
            <?php 
                while($row=mysqli_fetch_array($hasil)) 
                    { 
            ?>
        <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="gambar">Gambar</label>
                <!-- <input type="text" id="name" class="form-control "> -->

                <img src="images/kamar/<?php echo $row['gambar'];?>" width="525" height="200"  alt="Gambar tidak di temukan" name="kecamatan" id="kecamatan">

              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="Tarif">Tarif</label>
                <input type="tarif" name="Tarif" id="Tarif" class="form-control" value="Rp.<?= $row['Tarif']; ?>" readonly>
              </div>
            </div>
            <?php 
                    } 
            ?>
  
<?php 
    } 
?>