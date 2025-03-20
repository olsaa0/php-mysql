<?php
include_once('update.php');
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=:id;";
$sql->execute();
?>