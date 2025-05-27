<?php	

//Including config.php file for connection with database 
	include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if(isset($_POST['submit']))
	{

		$book_title = $_POST['book_title'];
		$book_desc = $_POST['book_desc'];
		$book_genre = $_POST['book_genre'];
		$year_published = $_POST['year_published'];
		$book_image = $_POST['book_image'];
	

		$sql = "INSERT INTO books(book_title, book_desc, book_genre, year_published, book_image) VALUES (:book_title, :book_desc, :book_genre, :year_published, :book_image)";

		$insertBook = $conn->prepare($sql);
			

		$insertBook->bindParam(':book_title', $book_title);
		$insertBook->bindParam(':book_desc', $book_desc);
		$insertBook->bindParam(':book_genre', $book_genre);
		$insertBook->bindParam(':year_published', $year_published);
		$insertBook->bindParam(':book_image', $book_image);

		$insertBook->execute();

		header("Location: books.php");


	}




?>