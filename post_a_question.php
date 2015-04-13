<?php
    require 'db_connect.php';  
	
	session_start();
    $username1= $_SESSION['username'];
    if(!isset($_SESSION['username'])){
        header('Location: interaction.html');
        exit;
    }
    $question = addslashes($_POST['question']);
    $question = nl2br($question); 

$sql = "INSERT INTO questions (username,questions,date)
        VALUES ('$username1', '$question', now())";

if ($conn->query($sql) === TRUE) {
    echo "Your question has been posted successfully.";
    echo "<script>setTimeout(function(){
         window.location = \"interaction.php\";
       },3000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //echo $username1;
}

$conn->close();
?>
