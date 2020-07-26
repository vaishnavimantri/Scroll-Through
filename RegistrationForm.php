<!<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="RegistrationForm.css">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata" rel="stylesheet">
<title>Registration Form</title>
</head>
<body>
<div class="signup-form">
  <img src="images/user.jpg">
  <form action="RegProcess.php" method="post">
    <input type="text" placeholder="User Name" class="txt" name="UserName">
      <input type="email" placeholder="Email" class="txt" name="Email">
  <input type="password" placeholder="Password" class="txt" name="Password">
  <input type="password" placeholder="Confirm Password" class="txt" name="Cpass">
  <input type="Submit" value="Create Account" class="btn" name="btn-save">
  <a href="LoginForm.php">Already Have an Account?</a>
</form>
</div>
</body>
