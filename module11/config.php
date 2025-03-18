<?php
$username = "root";
$dbname = "db1";
$server = "localhost";
try{
    $connection = new PDO("mysql:host=$server;dbname=$dbname;", $username);
    echo "connected";
}catch(Exeption $e){
    echo "error";
}
?>