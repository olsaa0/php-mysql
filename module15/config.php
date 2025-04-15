<?php
session_start();
$username = "root";
$dbname = "db";
$server = "localhost";
try{
    $conn = new PDO("mysql:host=$localhost;dbname=$db;", $user, $password);
    echo "connected";
}catch(PDOExeption $e){
    echo "error";
}
?>