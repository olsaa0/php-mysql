<?php
$host = "localhost";
$db = "data_db";
$user = "root";
$pass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "John";
    $password = password_hash("mypassword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO user1 (username, password) VALUES ('$username', '$password')";

    $pdo->exec($sql);

    echo "new record inserted successfully";

}catch(Exeption $e){
    echo $e->getMessage();
}
?>