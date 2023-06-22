<!DOCTYPE html>
<?php include "config.php"?>    
<html lang="en">
    <head>
        <title>Career</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
<style>
  body{
  background-image: url('img13.jpg');
  background-size:cover;
}
        .navbar {
  overflow: hidden;
  background-color: #adadad;
  position: center;
  top: 0;
  width: 100%;
}
h1,p{
  color:#fff;
}
.jobs{
  border:1px solid black;
  box-shadow: 5px 5px 4px 4px grey;
  margin:10px;
  padding:10px;
}
a{
  display: inline-block;
  color: #fff;
  text-decoration: none;
  border: 2px solid #fff;
  border-radius: 24px;
  padding: 8px 40px;
  transition: 0.4s linear;
}
a:hover{
  color: #fff;
  background: blue;
}
</style>
    </head>
    <body>
     <!----   <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</div>
</nav>-->
<div class="row">
  <div class="col-12">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('career1.jpg'); background-size:cover;">
      <div class="container">
        <h1 class="display-4">Job Portal</h1>
        <p class="lead">Best Jobs available matchhing  your skills</p>
        <a href='index.php'>Go to Home Page</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
<?php
$sql="SELECT cname,position,jdesc,skills,CTC FROM jobs";
$conn=mysqli_connect("localhost","root","","jobs");
  $result = mysqli_query($conn,$sql);
if($result->num_rows>0){
  while($rows=$result->fetch_assoc()){
    echo'
    <div class="col-md-4">
    <div class="jobs">
    <h3 style="text-align:center;">'.$rows['position'].'</h3>
    <h4 style="text-align:center;">'.$rows['cname'].'</h4>
    <p style="color:black; text-align:justify;">'.$rows['jdesc'].'</p>
    <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
    <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
    <button  class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
   Apply now
  </button>  
    </div>
    </div>';
  }
}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="pname">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="yearpass">
</div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!--div>
    <img src="img1.png" alt="" class="img fluid" width="1519">
</div-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>