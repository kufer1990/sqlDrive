<?php
include 'connect.php';
$sendElement = json_decode($_POST['sendElement']);

$result = $conn->query("UPDATE `member` SET `MemberID`='$sendElement->elementId',
`Imie`='$sendElement->name',`Nazwisko`='$sendElement->lastName',
`Ul`='$sendElement->street',`Numer_Domu`='$sendElement->numberHome'
,`Kod_Pocztowy`='$sendElement->postCode',`Miasto`='$sendElement->city'
,`Nr_Tel_Rodzic_1`='$sendElement->phoneOne',
`Nr_Tel_Rodzic_2`='$sendElement->phoneTwo',
`Status`='$sendElement->status',
`ID_KLASA`='$sendElement->idClass',
`ID_PLACOWKI`='$sendElement->idPlace',
`ID_OKREG`='$sendElement->idNeigh'
 WHERE `MemberID`='$sendElement->elementId'");
echo "element został poprawiony";