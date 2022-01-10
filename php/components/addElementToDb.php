<?php


$sendElement = $_POST['sendElement'];
$whatRun= $_POST['whatRun'];

if($whatRun==="neigh"){
addNeighTodb($sendElement);
}else if ($whatRun ==="deleteNeigh"){
deleteNeighTodb($sendElement); 
}




// deleteNeigh




function addNeighTodb($sendElement){
include 'connect.php';
$conn->query("INSERT INTO `okręgi` VALUES ('','$sendElement')");
echo "Okręg został pomyślnie dodany";
}

function deleteNeighTodb($sendElement){
    include 'connect.php';
$conn->query("DELETE FROM `okręgi` WHERE `Okreg` = '$sendElement'");
echo "Okręg został pomyślnie usunięty";
}