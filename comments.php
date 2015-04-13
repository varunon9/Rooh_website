<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require 'db_connect.php'; 
/*
$result = $conn->query("SELECT qid, username, comments, date FROM comments");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"qid":"'  . $rs["qid"] . '",';
    $outp .= '"username":"'   . $rs["username"]        . '",';
    $outp .= '"comments":"'. $rs["comments"]     . '",';
    $outp .= '"date":"'. $rs["date"]     . '"}';
}
$outp .="]";
echo $outp;
//echo json_encode($outp);
$conn->close();
*/

$result = $conn->query("SELECT * FROM comments");
$i = 0;
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$list[$i++] = array('qid'=>$rs['qid'],'username'=>$rs['username'],'comments'=>$rs['comments'],'date'=>$rs['date']);
}
echo json_encode($list);
$conn->close();



?>

