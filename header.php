
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css">
        <script src="https://kit.fontawesome.com/d409be34f4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <style>
          body{
                background-image: url('img13.jpg');
                background-size:cover;
            }
        .sidebar {
    margin: 0;
    margin-top: 20px;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
  }
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }
  .sidebar a.active {
    background-color: #f1f1f1;
    color: black;
  }

  .sidebar a:hover{
    background-color: #555;
    color: white;
  } .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  div.content {
    margin-top: 40px;
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
  .navbar {
  overflow: hidden;
  background-color: #333
  position: fixed;
  top: 0;
  width: 100%;
  
  
}
        </style>
    </head>
    <body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;">
  <a class="navbar-brand" href="#">Admin Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  </div>
</div>
</nav>
<div class="sidebar">
  <a class="active" href="index.php">Jobs</a>
  <a  href="jobs.php">Candidates Applied</a>
  <a href="career.php">Apply</a>
  <a href="about.html">About</a>
</div>