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
    */
    $Title = $_POST['Title'];
	$Author =  $_POST['Author'];
	$Category = $_POST['Category'];
	//$Quantity = $_POST['Quantity'];
	$Status = $_POST['Status'];


$sql = "INSERT INTO books (Title,Author,Category, Status)
VALUES ('$Title', '$Author', '$Category','$Status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>