<?php
    require 'controller.php';
    $conn = mysqli_connect("localhost", "root", "", "db_siswa");
    $students = query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi ke Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #B5F1CC;
        }
        .card{
            width: 50rem;
            height: 290px;
            margin-top: 150px; 
            border-radius: 30px;
            box-shadow: 10px 10px 15px 3px #000;
        }
        h1{
            text-align: center;
        }

        a{
            color: #000;
        }


    </style>
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-center">
    <div class="card">
    <div class="card-body">
        <h1>Data Siswa</h1>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Rayon</th>
                    <th>Rombel</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach( $students as $student ) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $student["nama"] ?></td>
                    <td><?= $student["nis"] ?></td>
                    <td><?= $student["rombel"] ?></td>
                    <td><?= $student["rayon"] ?></td>
                    <td><?= $student["status"] ?></td>
                    <td>
                        <button type="button" class="btn btn-warning">
                            <a href="delete.php?id=<?= $student["id"] ?>" onclick="return confirm('yakin data mau dihapus?')">hapus</a>
                        </button>
                        |
                        <button type="button" class="btn btn-info">
                            <a href="update.php?id=<?= $student["id"] ?>">ubah</a>
                        </button>
                        |
                        <button type="button" class="btn btn-light">
                            <a href="read.php?id=<?= $student["id"] ?>">lihat</a>
                        </button>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php } ?>
            </tbody>
        </table>
        <a href="tambah.php" class="btn btn-primary">Tambah data siswa</a>
</body>
</html>