<?php
include_once("config.php");

$id = 1;

$sql = "DELETE FROM users WHERE id=:id";
$deleteUsers = $conn->preprae($sql);
$delteUsers->bindParam(':id', $id);
$deleteUsers->execute();

header('Location:dashboard.php');

?>