<?php 
/*
We will get the changed data from edit.php file and update them into database
*/
	include_once('config.php');
	


	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$book_title = $_POST['book_title'];
		$book_desc = $_POST['book_desc'];
		$book_genre = $_POST['book_genre'];
		  $year_published=$_POST['year_published'];
		

		$sql = "UPDATE books SET id=:id,  book_title=:book_title, book_desc=:book_desc, book_genre=:book_genre,year_published=:year_published WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id',$id);
		$prep->bindParam(':book_title',$book_title);
		$prep->bindParam(':book_desc',$book_desc);
		$prep->bindParam(':book_genre',$book_genre);
		$prep->bindParam(':year_published',$year_published);
		
		$prep->execute();
		header("Location: dashboard.php");
	}
 ?>