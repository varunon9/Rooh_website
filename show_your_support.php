<?php
$servername = "localhost";
$username = "varun_123";
$password = "nitKURUKSHETRA123";
$dbname = "bookshelf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


   /* 
	$username = $_POST['username'];
	$password =  $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$year = $_POST['year'];
	$mobile_no = ($_POST['mobile_no']);
    $hostel_no = ($_POST['hostel_no']);
    $block_no = ($_POST['block_no']);
    $room_no = ($_POST['room_no']);
    
    $Title = $_POST['Title'];
	$Author =  $_POST['Author'];
	$Category = $_POST['Category'];
	//$Quantity = $_POST['Quantity'];
	$Status = $_POST['Status'];
   */
   $roll_no = $_POST['roll_no'];
   $name = $_POST['name'];
   $course = $_POST['course'];
   $designation = $_POST['designation'];
   $department = $_POST['department'];
   $email_id = $_POST['email_id'];
   $comments = $_POST['comments'];

$sql = "INSERT INTO show_your_support (Roll_no,Name,Course,Designation,Department,Email_id,Comments)
VALUES ('$roll_no', '$name', '$course','$designation','$department','$email_id','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Thanks for Showing Support to us.</h3><script>setTimeout(function(){
    	window.location = \"support.php\";
    },2000);</script>";
   // echo "Thanks for Showing Support to us.<a href=\"http://www.rooh.org.in/support.php\">Click here</a> to view support page";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>