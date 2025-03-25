<?php
include_once("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";
$deleteUsers = $conn->preprae($sql);
$delteUsers->bindParam(':id', $id);
$deleteUsers->execute();

header('Location:dashboard.php');

?>