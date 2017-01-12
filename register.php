<!DOCTYPE html>
<html>
<!--<style>
body{ background:#e6f7ff ;
      color:black;

}
form{
      position:fixed;
      top:200px;
      left:330px;
}
</style>-->
<head>
<meta charset="utf-8">
<title>Registration</title>

</head>
<body>
<!--<h1 align="center">EXAM SEATING ARRANGEMENT</h1>-->
<?php
echo "register.php";
 require('connect.inc.php');
 
 // If form submitted, insert values into the database.
 //echo "connected";
 if (isset($_POST['username'])){
 //echo "all set";
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysql_real_escape_string($username);
 $email = stripslashes($email);
 $email = mysql_real_escape_string($email);
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);
 $query = "INSERT INTO users (username,password,email) VALUES('$username','$password', '$email')";
 $result = mysql_query($query);
 if($result){
  header("Location: success.html");
 //echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.html'>Login</a></div>";
 }
 }
 
 else{
?>
<!--<div class="form">
<h1 align="center">Registration Form</h1>
<form name="registration" action="" method="post">
USERNAME:<input type="text" name="username" placeholder="Username" required /> <br><br>
EMAIL:<input type="email" name="email" placeholder="Email" required />   <br><br>
PASSWORD:<input type="password" name="password" placeholder="Password" required /> <br><br>
<input type="submit" name="submit" value="Register" />    <br><br>
</form>
</div>-->
<?php } ?>


</body>
</html>