<?php 
	/* 
	 We will include config.php for connection with database.
	 We will get the booking id and update the database based on that booking id
	*/
	include_once('config.php');

	$id = $_GET['id'];
	$sql = "UPDATE `borrowings` SET `borrow_date` = 'false' WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id',$id);
	$prep->execute();

	header("Location: list_books.php");
 ?>
 