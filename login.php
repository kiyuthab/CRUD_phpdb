<?php
    if(isset($_POST['submit'])){
        if( $_POST['username'] == "ayestha" && $_POST['password'] == "12209073"){
            header("Location: index.php");
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #393E46;
            background-image: url(image.png);
        }
        .card{
            width: 30rem;
            margin: 130px;
        }

        .card-body{
            box-shadow: 1px 15px 15px 3px #000;
        }
        p{
            color: #ff0000;
        }


    </style>
    
</head>
<body>

<div class ="container">
<div class="d-flex justify-content-center">
<div class="card">
  <div class="card-body">
    <h1>Login</h1>

    <form action="" method= "post">
    <?php if ( isset($error) ){ ?>
        <p><i>Username/Password salah</i></p>
        <?php } ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name= "password">
    </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>
  </div>
</div>
</body>
</html>