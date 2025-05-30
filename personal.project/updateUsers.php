<?php 
/*
We will get the changed data from editUsers.php file and update them into database
*/

	include_once('config.php');

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];

		$sql = "UPDATE users SET id=:id, name=:name, username=:username, email=:email WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id',$id);
		$prep->bindParam(':name',$name);
		$prep->bindParam(':username',$username);
		$prep->bindParam(':email',$email);
		$prep->execute();
		header("Location: dashboard.php");
	}
 ?>