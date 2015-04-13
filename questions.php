
<?php


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require 'db_connect.php'; 

$result = $conn->query("SELECT * FROM questions");
$i = 0;
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$list[$i++] = array('qid'=>$rs['qid'],'username'=>$rs['username'],'questions'=>$rs['questions'],'date'=>$rs['date']);
}
echo json_encode($list);
//echo $list;
$conn->close();

//echo $outp;


/*
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require 'db_connect.php'; 

$result = $conn->query("SELECT qid, username, questions, date FROM questions");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"qid":"'  . $rs["qid"] . '",';
    $outp .= '"username":"'   . $rs["username"]        . '",';
    $outp .= '"questions":"'. $rs["questions"]     . '",';
    $outp .= '"date":"'. $rs["date"]     . '"}';
}
$outp .="]";

$conn->close();
echo $outp;
//echo json_encode($outp);
*/

?>
