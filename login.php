<html>
<head>


</head>
<body>
  <?php
  if(isset($_POST['submit']))
  {
$stud_number =$_POST['stud_number'];
$password =$_POST['password'];

$sql="select stud_number,password from student where stud_number=$stud_number and password=$password";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);
if($result<0)
{
  echo"invalid!!";
}else 
{
  header("location: booking.php");
}



  }
  
  
  ?>
  <form action="login.php"method="POST">
    <label >
      username
    </label>
    <input type="text" name="stud_number">

    <label >
      password
    </label>
    <input type="text" name="password">
<button type="submit" name="submit">
  log in
</button>
  </form>
</body>
</html>