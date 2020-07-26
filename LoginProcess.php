<?php
require_once('RegConnection.php');
if(isset($_POST['btn-login']))
{
$Username = $_POST['UserName'];
$Password = $_POST['Password'];
if(empty($Username) ||  empty($Password) )
{
echo "Please Fill in the blanks";
}
else{
$query="select * from users where Name= '$Username' OR Email='$Username'";
  $result=mysqli_query($con,$query);
  if($row = mysqli_fetch_assoc($result))
  {
    $db_password=$row['Password'];
    if($Password ==$db_password)
    {
      header("location:home.html");
    }
    else{
echo "Please Enter Correct Password";
    }
  }
    else{
      echo "Please Check your Query";
    }
}
}
 ?>
