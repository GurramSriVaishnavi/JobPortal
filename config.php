<style>
.mycss{
    color: black;
    border:1px solid #000;
    background: #ccc;
    padding: 320px;
    text-align:center;
    font-size:40px;
}
</style>
<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn = mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
echo"";
session_start();

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone_no'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $number=$_POST['phone_no'];
        $sql="INSERT INTO users (name,email,password,phone_no) VALUES ('$name','$email','$password','$number')";    
        if(mysqli_query($conn,$sql)){
          echo "";
        }
        else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }}
        else{
            echo " ";
        }
  }

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE 'email'='$email' AND 'password'='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='email id or password is incorrect';
    }
}

if(isset($_POST['jobs'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $jobs= "INSERT INTO jobs (cname,position,Jdesc,skills,CTC) VALUES ('$cname','$position','$Jdesc','$skills','$CTC')";
   if(mysqli_query($conn, $jobs)){
    echo "Records inserted successfully";
  }
  else{
    echo "erroe:could not able to execute $sql. " .mysqli_error($conn);
  }
}

if(isset($_POST['submit'])){
  $pname=$_POST['pname'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $yearpass=$_POST['yearpass'];
   
    $sql= "INSERT INTO candidates (pname,qual,apply,yearpass) VALUES ('$pname','$qual','$apply','$yearpass')";
    mysqli_query($conn,$sql);
   
}

mysqli_close($conn);
?>
