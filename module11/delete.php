<?php
include_once('config.php');
$id = $_GET['id'];
$prep = $connection->prepare($sql);

 $prep->bindParam(':id' ,$id);
$sql = "DELETE FROM users WHERE id=:id;";
$sql->execute();
?>