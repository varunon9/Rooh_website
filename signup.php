<?php
// define variables and set to empty values
require 'db_connect.php';
$nameErr = $emailErr = $genderErr = $designationErr = $usernameErr = $password1Err = $password2Err = "";
$name = $email = $gender = $designation = $username1 = $password1 = $password2 = "";
$flag=0;
$Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
     echo $nameErr;
     $flag=1;
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
       echo $nameErr;
       $flag=1;
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
     echo $emailErr;
     $flag=1;
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
       echo $emailErr;
       $flag=1;
     }
      $sql1 = "SELECT * FROM users where email = '$email'";
      $result = $conn->query($sql1);

      if ($result->num_rows > 0) {
            $emailErr = "This email-id is used.<br>";
            echo $emailErr;
            $flag=1;
       }
   }
   /*
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL";
     }
   }
    */
   if (empty($_POST["designation"])) {
     $designationErr = "Designation is required";
     echo $designationErr;
     $flag=1;
   } else {
     //$designation = mysqli_real_escape_string($_POST["designation"]);
    $designation = addslashes($_POST["designation"]);
     
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
     echo $genderErr;
     $flag=1;
   } else {
     $gender = test_input($_POST["gender"]);
   }

   if (empty($_POST["username"])) {
     $usernameErr = "username is required";
     echo $usernameErr;
     $flag=1;
   } else {
     $username1 = test_input($_POST["username"]);
     
        
      $sql1 = "SELECT * FROM users where username = '$username1'";
      $result = $conn->query($sql1);

      if ($result->num_rows > 0) {
            $usernameErr = "This username has already been used<br>";
            echo $usernameErr;
            $flag=1;
       }
       
   }

   if (empty($_POST["password1"])) {
     $password1Err = "Password is required";
     echo $password1Err;
     $flag=1;
   } else {
     $password1 = test_input($_POST["password1"]);
     
   }

   if (empty($_POST["password2"])) {
     $password2Err = "Password is required<br>";
     echo $password2Err;
     $flag=1;
   } else {
     $password2 = test_input($_POST["password2"]);
     
   }
   if($password1 != $password2){
     $password1Err = "Password does not match<br>";
     echo $password1Err;
     $flag=1;
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
/*
if(($nameErr!=$Err) || ($emailErr!=$Err) || ($genderErr!=$Err) || ($designationErr!=$Err) || ($usernameErr!=$Err) || ($password1Err!=$Err) || ($password2Err!=$Err)){
   $flag=1;
}
*/
if($flag==1){
   echo "<h2>Error occured</h2>";
   //echo $nameErr+"<br>"+$genderErr+"<br>"+$emailErr+"<br>"+$designationErr+"<br>"+$usernameErr+"<br>"+$password1Err+"<br>"+$password2Err+"<br>";
   echo "<h3>Try again</h3><script>setTimeout(function(){
      window.location = \"login_signup.html\";
    },5000);</script>";
}
else {
   //require 'db_connect.php';
   $com_code = md5(uniqid(rand()));
   $password1=md5($password1);
   $sql = "INSERT INTO users (username,password,email,name,gender,designation,com_code)
   VALUES ('$username1', '$password1', '$email','$name','$gender','$designation','$com_code')";

   if ($conn->query($sql) === TRUE) {

       require 'send_mail.php';


       echo "<p>Thanks for Signing up. Please confirm your mail.</p><script>setTimeout(function(){
         window.location = \"login_signup.html\";
       },5000);</script>";
      // echo "Thanks for Showing Support to us.<a href=\"http://www.rooh.org.in/support.php\">Click here</a> to view support page";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

   $conn->close();
}
?>