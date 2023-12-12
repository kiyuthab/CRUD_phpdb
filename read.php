<?php
    require'controller.php';

    $id = $_GET["id"];
    $student = query("SELECT * FROM students WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail data diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #B5F1CC;
        }

        .card-body{
            background-color: #fff;
            border-radius: 30px;
        }
        .card{
            margin-top: 10px;
            width: 17rem;
            box-shadow: 10px 10px 15px 3px #000;
            border-radius: 30px;
        }

        .card-img-top{
            border-radius: 30px;
        }
        
        a{
            width: 90px;
            margin-left: 90px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="d-flex justify-content-center">
    <div class="card">
    <img src="<?= $student["gambar"]?>" class="card-img-top" alt="...">
    <div class="card-body">
        <ul class="card-text">
            <li>Nama : <?= $student["nama"]?></li>
            <li>NIS : <?= $student["nis"]?></li>
            <li>Rombel : <?= $student["rombel"]?></li>
            <li>Rayon : <?= $student["rayon"]?></li>
            <li>Status : <?= $student["status"]?></li>
            <li>Hobi : <?= $student["hobi"]?></li>
            <li>Alamat : <?= $student["alamat"]?></li>   
            <li>Merk Laptop : <?= $student["merk_laptop"]?></li>   
            <li>Cita-cita : <?= $student["cita_cita"]?></li>   
        </ul>
    </div>
    <a href="index.php" class="btn btn-primary">Back</a>
</body>
</html>