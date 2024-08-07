<?php 
include 'connect.php';
$id=$_GET['No_Kamar'];
$sql= mysqli_query($con,"select * from kamar where No_Kamar='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Form Entri Data Villa</title>                        
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Data Villa</h3>
                    </div>
                    <div class="card-body">
                    <form action="editkamarsimpan.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="No_Kamar">ID Villa</label>
                            <input type="text" name="No_Kamar" class="form-control" id="No_Kamar" placeholder="ID Villa" value="<?php echo $data['No_Kamar']?>" readonly >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Villa</label>
                            <input type="text" name="Jenis" class="form-control" id="Jenis" placeholder="Nama Villa" value="<?php echo $data['Jenis']?>"  >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Type</label>
                            <input type="text" name="Type" class="form-control" id="Type" placeholder="Tipe" value="<?php echo $data['Type']?>"  >
                        </div>
                        <div class="form-group mb-3">
                            <label for="Tarif">Tarif</label>
                            <input type="number" name="Tarif" class="form-control" id="Tarif" placeholder="Masukan Tarif" value="<?php echo $data['Tarif']?>">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input class="form-control" name="gambar" type="file" id="formFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?php echo $data['deskripsi']?></textarea>
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