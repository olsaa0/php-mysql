<?php 
 /*Creating a session  based on a session identifier, passed via a GET or POST request.
  We will include config.php for connection with database.
  */

	session_start();

	include_once('config.php');

	//Getting values 'id' and 'movie_id' using $_SESSION
	$user_id = $_SESSION['id'];
    $book_id = $_SESSION['book_id'];

	//Getting some of data from details.php form
	$borrow_date = $_POST['borrow_date'];
	$return_date = $_POST['return_date'];
	//Inserting the new data into database
	$sql = "INSERT INTO borrowings(user_id, book_id, borrow_date, return_date) VALUES (:user_id, :book_id, :borrow_date, :return_date)";

	$insertBorrowing = $conn->prepare($sql);

	$insertBorrowing->bindParam(":user_id", $user_id);
	$insertBorrowing->bindParam(":book_id", $book_id);
	$insertBorrowing->bindParam(":borrow_date", $borrow_date);
	$insertBorrowing->bindParam(":return_date", $return_date);

	$insertBorrowing->execute();

	header("Location: home.php");

	
	











 ?>