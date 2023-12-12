<?php
    require'controller.php';

    if (isset($_POST["submit"])){
        if(tambah($_POST) > 0){
            echo "
            <script>
                alert('data berhasil dimasukkan');
                document.location.href = 'index.php';
            </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal dimasukkan');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #B5F1CC;
        }

        .card{
            width: 50rem;
            margin: 25px;
        }

        .card-body{
            box-shadow: 10px 10px 15px 3px #000;
        }
    </style>
</head>
<body>
<div class="container">
<div class="d-flex justify-content-center">
<div class="card">
  <div class="card-body">
    <h1>Input Data Diri Siswa</h1>
    <form action="" method= "post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NIS</label>
        <input type="number" class="form-control" name= "nis" id="nis">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rombel</label>
        <input type="text" class="form-control" name= "rombel" id="rombel">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rayon</label>
        <input type="text" class="form-control" name= "rayon" id="rayon">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status</label>
        <input type="text" class="form-control" name= "status" id="status">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hobi</label>
        <input type="text" class="form-control" name= "hobi" id="hobi">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" name= "alamat" id="alamat">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Merk Laptop</label>
        <input type="text" class="form-control" name= "merk_laptop" id="merk_laptop">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Cita-cita</label>
        <input type="text" class="form-control" name= "cita_cita" id="cita_cita">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gambar</label>
        <input type="file" class="form-control" name= "gambar" id="nama">
    </div>

  <a href="index.php" class="btn btn-primary">Back</a>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>