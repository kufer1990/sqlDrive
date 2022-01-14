<?php
@$memberID=$_POST['sendElement'];
include 'connect.php';
if ($memberID >"") {
    $result = $conn->query("SELECT * FROM `member` WHERE `MemberID` = $memberID");
    while($row=$result->fetch()){
    $member =array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
             $memberJson = json_encode($member);
        echo($memberJson);
    }
}


?>
