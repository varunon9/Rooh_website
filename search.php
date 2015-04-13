
<!DOCTYPE html>
<html>
<head>
	<title>Search by Category</title>
	<style type="text/css">
		table{
			cellspacing:1px;
			cellpadding:1px;
			border:1px solid #DDD;
		}
		th{
			border:1px solid purple;
		}
		td {
		 //font-family: Arial, Helvetica, sans-serif;
		 //font-size: .7em;
       border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php
require 'db_connect.php';
//$Category = $_post['Category'];
$Category = $_POST['Category'];
//$sql = "SELECT Id,Title, Author, Category,  Status FROM books where Category = '$Category' ";
$sql = "SELECT * FROM books where Category= \"$Category\" ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Book Id</th><th>Title of the Book</th><th>Author</th><th>Category</th><th>Status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Id"]."</td><td>".$row["Title"]."</td><td>".$row["Author"]."</td><td> ".$row["Category"]."</td><td>".$row["Status"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
