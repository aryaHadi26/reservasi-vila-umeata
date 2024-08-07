<html lang="en">

<head>
    <title>Form Entri Kamar</title>                        
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Input Data Kamar</h3>
                    </div>
                    <div class="card-body">
                    <form action="simpankamar.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="No_Kamar">ID Villa</label>
                            <input type="text" name="No_Kamar" class="form-control" id="No_Kamar" placeholder="ID Villa">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Villa</label>
                            <input type="text" name="Jenis" class="form-control" id="Jenis" placeholder="Nama Villa">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Type</label>
                            <input type="text" name="Type" class="form-control" id="Type" placeholder="Tipe">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Tarif">Tarif</label>
                            <input type="number" name="Tarif" class="form-control" id="Tarif" placeholder="Masukan Tarif">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input class="form-control" name="gambar" type="file" id="formFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Status Villa</label>
                            <select class="custom-select" style="width: 100%; padding: 10px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" name="status" id="dropdown">
                                <option selected>--Pilih--</option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select>
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