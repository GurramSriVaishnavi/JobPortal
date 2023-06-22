<style>
#b1{
  position: relative;
}


</style> 

<?php include 'header.php' ?>
<?php include 'config.php' ?>
<div class="content">
<p>
  
  <button id="b1" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
     </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea name="Jdesc" id="" cols="5" rows="5" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Requried</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary" name="jobs">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
 <tbody>
  <?php $sql="SELECT cname,position,CTC FROM jobs";
  $conn=mysqli_connect("localhost","root","","jobs");
  $result = mysqli_query($conn,$sql);
  $i=0;
if($result->num_rows>0){
  while($rows=$result->fetch_assoc()){
   
    echo"
    
    <tr>
      <td>".++$i."</td>
      <td>".$rows['cname']."</td>
      <td>".$rows['position']."</td>
      <td>".$rows['CTC']."</td>
    </tr> ";
  }
} 
else{
  echo"";
} 

?>
</tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>