<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
                margin-top: 4em;
                margin-left: 15em;
                margin-right: 10em;
                padding: 30px;
                box-shadow: 10px 10px 8px 10px #888888;
            }
            #t{
              tex-align:center;
            }
        
        </style>
        <title>Register</title>
    </head>
    <body>
      
        <div class="container">
<form action="login.php" method="POST">
        <div class="form-group">
    <label for="exampleInputName">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="form-group"> 
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputNumber">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="password" >
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>
            
        </div>
    
    </body>
</html>
