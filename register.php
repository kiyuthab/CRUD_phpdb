<?php
    require 'controller.php';

    if(isset($_POST['register'])){
        if(register($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil dimasukkan');
                </script>
                ";
        }else{
            mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laman register</title>
    <style>
        
    </style>
</head>
<body>
    
    <ul>
        <form action="" method="post">
            <li>
                <label for="">username</label>
                <input type="text" name="username" id="" autocomplete="0">
            </li>
            <li>
                <label for="">password</label>
                <input type="text" name="password" id="">
            </li>
            <li>
                <label for="">konfirmasi password</label>
                <input type="text" name="conf_password" id="">
            </li>
            <button type="submit" name="register">register</button>
        </form>
    </ul>

</body>
</html>