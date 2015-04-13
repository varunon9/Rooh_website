<?php
    require 'db_connect.php';  
	
	session_start();
    $username1= $_SESSION['username'];
    if(!isset($_SESSION['username'])){
        header('Location: interaction.html');
        exit;
    }



    $qid = $_POST['qid'];
	$comment = $_POST['comment'];
	//$comment = $_POST['comment'];
    $comment = addslashes($_POST['comment']); 
    $comment=nl2br($comment);   

$sql = "INSERT INTO comments (qid,username,comments,date)
VALUES ($qid,'$username1', '$comment', now())";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for the reply buddy.";
    echo "<script>setTimeout(function(){
         window.location = \"interaction.php\";
       },3000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
