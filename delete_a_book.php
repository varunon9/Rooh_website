<?php

if(isset($_POST['submit']))
{
$dbhost = 'localhost';
$dbuser = 'varun_123';
$dbpass = 'nitKURUKSHETRA123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$id = $_POST['Id'];

$sql = "DELETE from books ".
       "WHERE Id = $id" ;

mysql_select_db('bookshelf');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}


/*
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

// sql to delete a record
//$Id = $_POST['Id'];
//$sql = "DELETE FROM books WHERE Id = $Id ";
$emp_id = $_POST['Id'];

$sql = "DELETE from books ".
       "WHERE Id = $emp_id" ;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
*/
?>
