<?php
    require'controller.php';

    $id = $_GET["id"];
    $student = query("SELECT * FROM students WHERE id = $id")[0];

    if (isset($_POST["submit"])){
        if(ubah($_POST) > 0){
            echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'index.php';
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
    <form action="" method= "post">
    <input type="hidden" name="id" id="" value="<?= $student["id"] ?>">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="" value="<?= $student["nama"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NIS</label>
        <input type="number" class="form-control" name= "nis" id="" value="<?= $student["nis"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rombel</label>
        <input type="text" class="form-control" name= "rombel" id="" value="<?= $student["rombel"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Rayon</label>
        <input type="text" class="form-control" name= "rayon" id="" value="<?= $student["rayon"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status</label>
        <input type="text" class="form-control" name= "status" id="" value="<?= $student["status"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Hobi</label>
        <input type="text" class="form-control" name= "hobi" id="" value="<?= $student["hobi"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" name= "alamat" id="" value="<?= $student["alamat"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Merk Laptop</label>
        <input type="text" class="form-control" name= "merk_laptop" id="" value="<?= $student["merk_laptop"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Cita-cita</label>
        <input type="text" class="form-control" name= "cita_cita" id="" value="<?= $student["cita_cita"] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gambar</label>
        <input type="file" class="form-control" name= "img" id="" value="<?= $student["gambar"] ?>">
    </div>

  <a href="index.php" class="btn btn-primary">Back</a>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</body>
</html>