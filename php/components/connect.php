<?php


$serverName="localhost";
$login = "root";
$password="";
$dbName="transport";

try{
$conn= new PDO("mysql:host=$serverName;dbname=$dbName;encoding='utf-8'", "$login","$password");
// echo "mamy połączenie";
}catch(PDOException $e){
    echo "nie można połączyć się z bazą danych";
    die();

}


?>


