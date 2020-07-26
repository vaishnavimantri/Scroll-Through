<?php
require_once('RegConnection.php');
if(isset($_POST['btn-save']))
{
$Username = mysqli_real_escape_string($con , $_POST['UserName']);
$Email = mysqli_real_escape_string($con , $_POST['Email']);
$Password = mysqli_real_escape_string($con , $_POST['Password']);
$CPassword = mysqli_real_escape_string($con , $_POST['Cpass']);

if(empty($Username) || empty($Email) || empty($Password) ||empty($CPassword) ){
echo "Please Fill in the blanks";
}
if($Password!=$CPassword){
  echo "Password Not Matched";
}
else{
  $sql="insert into  users( Name, Email, Password) values('$Username','$Email','$Password')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Your Account has been Created";
  }
  else{
    echo "Please Check your Query";
  }
}
}
 ?>
