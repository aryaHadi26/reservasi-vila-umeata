<html lang="en">

<head>
    <title>Form Entri Staff</title>                        
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Input Data Staff</h3>
                    </div>
                    <div class="card-body">
                    <form action="simpanstaf.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
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