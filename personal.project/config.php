<?php
$user = "root";
$pass = "";
$server = "localhost";
$dbname = "library";

try{
    $conn = new PDO("mysql:host=$server; dbname=$dbname", $user, $pass);
}catch(PDOExeption $e){
   echo "error" . $e ->getMessage();
}
?>