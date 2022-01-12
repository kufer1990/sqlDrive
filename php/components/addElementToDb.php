<?php


//sprawdzenie jaka operacja  jest wykonywana i pobranie zmiennych ze strony
$whatRun= $_POST['whatRun'];
if($whatRun==='neigh'||$whatRun==='deleteNeigh'){
    $sendElement = $_POST['sendElement'];
}
else if(($whatRun==='addSchool')){
    $sendElement=json_decode($_POST['sendElement']);
}




//wywolanie odpowiedniego zapytania wzaleznosci od tego co chcemy zrobic
if($whatRun==="neigh"){
addNeighTodb($sendElement);
}else if ($whatRun ==="deleteNeigh"){
deleteNeighTodb($sendElement); 
}else if($whatRun==="addSchool"){
addSchoolToDb($sendElement);
}



////////////////////////////////////////////////////////tu jestem
//definicja funkcji i jej zachowanie

// add School
function addSchoolToDb($sendElement){
    include 'connect.php';
    $conn->query("INSERT INTO `placówki` VALUES ('','$sendElement->name','$sendElement->street','$sendElement->postCode','$sendElement->city','$sendElement->phone',$sendElement->idokregi)");
    echo "Placówka została dodana pomyślnie";
}

// add neigh
function addNeighTodb($sendElement){
include 'connect.php';
$conn->query("INSERT INTO `okręgi` VALUES ('','$sendElement')");
echo "Okręg został pomyślnie dodany";
// 
}
// deleteNeigh

function deleteNeighTodb($sendElement){
    include 'connect.php';
$conn->query("DELETE FROM `okręgi` WHERE `Okreg` = '$sendElement'");
echo "Okręg został pomyślnie usunięty";
}



