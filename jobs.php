<style>

</style>
<?php include "header.php"?>  

<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout </th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select pname,apply,yearpass from candidates";
    $conn=mysqli_connect("localhost","root","","jobs");
    $result = mysqli_query($conn,$sql);
    $i=0;
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo"
      <tr>
        <th>".++$i."</th>
        <td>".$rows['pname']."</td>
        <td>".$rows['apply']."</td>
        <td>".$rows['yearpass']."</td>
      </tr> ";
    }
  } 
  else{
    echo"";
  } 
  
?>


  </body>
</table>
</div>