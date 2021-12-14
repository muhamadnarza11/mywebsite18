<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
       img{
           position:fixed;
           z-index:-100;
       }
    </style>
</head>
<body>
<div class="container-fluid">
   <img src="">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <div class="kotak-login p-5 mt-5">
        <form action="" method="post">
        <center><h1>Login Account</h1></center>
            <div class="form-group">
                 <label style="color:black" for="username">Username</label>
                 <input class="form-control"  type="textt" id="username" name="username" autocomplete="off" required>
             </div>
            <div class="form-group">
                 <label style="color:black" for="password">Password</label>
                 <input class="form-control" type="password" id="password" name="password" autocomplete="off" required>
             </div>
             <br>
            <div class="form-group">
                 <button class="btn btn-primary" name="login" type="submit">LOGIN</button>
             </div>
       </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php

    
     if (isset($_POST['login'])) {
        echo $username = $_POST['username'];
        echo $password = $_POST['password'];

        $query = mysqli_query($konek,"SELECT * FROM user where username = '$username' && password = '$password'");

       if(mysqli_num_rows($query)>0) {
     ?>
      <script>
         alert('Anda Berhasil Login !!')
      </script>
            <?php 
            header('location:user.php');
        }else{
            ?>
            <script>
                alert('Username atau Password anda salah!!!')
            </script>

            <?php
        }
     }
?>
</body>
</html>