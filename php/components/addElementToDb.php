<?php


//sprawdzenie jaka operacja  jest wykonywana i pobranie zmiennych ze strony
$whatRun= $_POST['whatRun'];
if($whatRun==='neigh'||$whatRun==='deleteNeigh'||$whatRun==='deleteSchool'||$whatRun ==='deleteClass'){
    $sendElement = $_POST['sendElement'];
}
else if($whatRun==='addSchool'||$whatRun==='addClassToDb'||$whatRun==='addMember'||$whatRun==='deleteMember'){
    $sendElement=json_decode($_POST['sendElement']);
}




//wywolanie odpowiedniego zapytania wzaleznosci od tego co chcemy zrobic
if($whatRun==="neigh"){
    addNeighTodb($sendElement);
}else if ($whatRun ==="deleteNeigh"){
    deleteNeighTodb($sendElement); 
}else if($whatRun==="addSchool"){
    addSchoolToDb($sendElement);
}else if($whatRun==="deleteSchool"){
    deleteSchoolWithDb($sendElement);
}else if($whatRun==='addClassToDb'){
    addClassToDb($sendElement);
}else if($whatRun==='deleteClass'){
    deleteClassWithDB($sendElement);
}else if($whatRun==='addMember'){
    addMemberToDb($sendElement);
}else if($whatRun==='deleteMember'){
    deleteMemberWithDB($sendElement);
}


//definicja funkcji i jej zachowanie

// add School
function addSchoolToDb($sendElement){
    include 'connect.php';
    $conn->query("INSERT INTO `placówki` VALUES ('','$sendElement->name','$sendElement->street','$sendElement->postCode','$sendElement->city','$sendElement->phone',$sendElement->idokregi)");
    echo "Placówka została dodana pomyślnie";
}
// delete School
function deleteSchoolWithDb($sendElement){
    // print_r($sendElement);
    include 'connect.php';
    $conn->query("DELETE FROM `placówki` WHERE `Nazwa` = '$sendElement'");
    echo "Element został usunięty";
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


// add class
function addClassToDb($sendElement){
    include 'connect.php';
    $conn->query("INSERT INTO `klasa` VALUES ('','$sendElement->addClassInput', '$sendElement->schoolID', '$sendElement->neighID')");
echo "Klasa została stworzona";
}

//deleteClass
function deleteClassWithDB($sendElement){
    include 'connect.php';
    $result = $conn->query("SELECT `KlasaID` FROM `klasa` WHERE `Klasa` = '$sendElement'");

while($row = $result->fetch()){
    global $idClassToDelete;
    $idClassToDelete = $row[0];
}
     $conn->query("DELETE FROM `klasa` WHERE `KlasaID` = $idClassToDelete");
     echo "Element został usunięty";

}

function addMemberToDb($sendElement){
    include 'connect.php';
    $conn->query("INSERT INTO `member` VALUES ('','$sendElement->name','$sendElement->lastName','$sendElement->street','$sendElement->numberHome','$sendElement->postCode','$sendElement->city','$sendElement->phoneOne','$sendElement->phoneTwo','$sendElement->status','$sendElement->idClass','$sendElement->idSchool','$sendElement->idNeigh')");
    echo "Element został dodany";
};

function deleteMemberWithDB($sendElement){
    include 'connect.php';
    $conn->query("DELETE FROM `member` WHERE `Imie` = '$sendElement->name' AND `Nazwisko` = '$sendElement->lastName'");
    echo "Element został usunięty";
};