<?php
$host = "localhost";
$db = "data_db";
$user = "root";
$pass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);



    $sql = "DROP TABLE data_db ";

    $pdo->exec($sql);

    echo "removed table successfully";

}catch(Exeption $e){
    echo $e->getMessage();
}
?>