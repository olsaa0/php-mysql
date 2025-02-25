<?php
$host = "localhost";
$db = "data_db";
$user = "root";
$pass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "John";
    $password = password_hash("mypassword", PASSWORD_DEFAULT);

    $sql = "ALTER TABLE user1 ADD email VARCHAR(255)";

    $pdo->exec($sql);

    echo "new colums successfully";

}catch(Exeption $e){
    echo $e->getMessage();
}
?>