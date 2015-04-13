<!DOCTYPE html>
<html>
	<head>
		<title>Thanks for your Support</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="author" content="Varun kumar" >
    	<link rel="shortcut icon" href="images/logo.jpg">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
		<link href="css/bootstrap.css" rel="stylesheet">
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/landing-page.css" rel="stylesheet">
   	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56338110-1', 'auto');
  ga('send', 'pageview');

		</script>
   	<style>
   		table td{
   			opacity:.7;
   		}
   		.jumbotron{
   			margin-top:65px;
   		}
   	</style>
	</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt="ROOH Ek muheem" class="logo"/></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav ">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who we are <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about_us.html">About Us</a></li>
                <li  class="active"><a href="members.html">Members</a></li>
                <!--
                <li><a href="#">Helping Hands</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support Us <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="sponsor_a_child.html">Sponsor a Child</a></li>
                <li><a href="helping_hands.html#make_donation">Make Donation</a></li>
                <li><a href="helping_hands.html">Helping Hands</a></li>
                <li><a href="contact.html#show_your_support">Show your support</a></li>
                <!--
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="bookshelf.html">Bookshelf</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="jumbotron">
   	 <div class="container">
    		<h5><code>Thank you for your Support</code></h5>
   	 </div>
   </div>
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

$sql = "SELECT Roll_no,Name,Course,Designation, Department, Email_id,  Comments FROM show_your_support";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class=\"container\" id=\"support\"><div class=\"row\"><div class=\"col-md-12\"><div class=\"table-responsive\"><table class=\"table\"><thead><tr><th>Roll No</th><th>Name</th><th>Course</th><th>Designation</th><th>Department</th><th>Email Id</th><th>Comments</th></tr></thead><tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Roll_no"]."</td><td>".$row["Name"]."</td><td>".$row["Course"]."</td><td>".$row["Designation"]."</td><td> ".$row["Department"]."</td><td>".$row["Email_id"]."</td><td>".$row["Comments"]."</td></tr>";
    }
    echo "</tbody></table></div></div></div></div>";
} else {
    echo "0 results";
}
$conn->close();
?>
	<div class="container" id="footer">
      <center>
      	<p>ROOH Ek muheem...</p>
      	<p>Social and Cultural Society, NIT Kurukshetra</p>
      	<p>
      		<a href="http://http://www.facebook.com/roohkkr" target="_blank"><button type="button" class="btn btn-xs btn-danger">Like Us</button></a>
        		<a href="http://goo.gl/forms/nqIzU2RWka" target="_blank"><button type="button" class="btn btn-xs btn-default">Feedback</button></a>
       
        		<a href="http://goo.gl/forms/jU6jsmIg6x" target="_blank"><button type="button" class="btn btn-xs btn-success">Donate Now</button></a>
        
        </p>
     </center>
    </div>
</body>
</html>