<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body{
                background-image: url('img1.png');
                background-size:cover;
            }
            form{
                background-color: #fff;
                margin-top: 10em;
                margin-left: 15em;
                margin-right: 10em;
                padding: 30px;
                box-shadow: 10px 10px 8px 10px #888888;
            }
        
        </style>
    </head>
    <body>
        <div class="container">
        <form action="index.php" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <input type="submit" class="btn btn-primary" name="login">
 <p style="text-align:center;">New User? <br> Create Account <a href="register.php">Sign Up</a></p>
 </style> 
</form>     
        </div>
    </body>
</html>