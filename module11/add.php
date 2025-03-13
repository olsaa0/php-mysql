<?php
require('config.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $sql = "INSERT INTO users(name, surname, email, age) VALUES(:name, :surname, :email, :age)";

    $sqlQuery = $connection->prepare($sql);
    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':surname', $surname);
    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':age', $age);
    $sqlquery = execute();
}