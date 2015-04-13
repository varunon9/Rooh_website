<?php
 //include('db_connect.php');
require 'db_connect.php';
 $passkey = $_GET['passkey'];
 $sql = "UPDATE users SET com_code=NULL WHERE com_code='$passkey'";
 //$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
 if($conn->query($sql) === TRUE)
 {
  echo '<div>Your account is now active. You may now <a href="login_signup.html">Log in</a></div>';
}
 else
 {
  echo "Some error occured.";
 }
?>