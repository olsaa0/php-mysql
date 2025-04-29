<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $emri=$_POST['movie_name'];
    $username=$_POST['movie_desc'];
    $email=$_POST['movie_quality'];

    $sql="UPDATE movies SET id=:id,movie_name=:movie_name,movie_desc=:movie_desc,movie_quality=:movie_quality WHERE id=:id";

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id' ,$id);
    $prep->bindParam(':emri' ,$movie_name);
    $prep->bindParam(':username' ,$movie_desc);
    $prep->bindParam(':email' ,$movie_quality);
    $prep->execute();

    header('Location:list_movies.php');
}