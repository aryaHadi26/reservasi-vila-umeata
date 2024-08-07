<?php 
include 'connect.php';
$id=$_GET['id_fasilitas'];
$sql= mysqli_query($con,"select * from fasilitas where id_fasilitas='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Form Entri Fasilitas</title>                        
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Data Fasilitas</h3>
                    </div>
                    <div class="card-body">
                    <form action="editfasilitassimpan.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <input type="hidden" name="id_fasilitas" class="form-control" id="id_fasilitas" placeholder="" value="<?php echo $data['id_fasilitas']?>" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis" placeholder="jenis" value="<?php echo $data['jenis']?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?php echo $data['deskripsi']?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input class="form-control" name="gambar" type="file" id="formFile">
                        </div>
                        <hr>
                        <div class="form-group" style="float: right;">
                            <input type="submit" class="btn btn-primary" value="SIMPAN">
                            <input type="reset" class="btn btn-danger" value="RESET">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>