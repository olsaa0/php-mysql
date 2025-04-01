<?php
include_once('config.php');
if(isset($_POST('submit'))){
    $name=$_POST('name');
    $surname=$_POST('surname');
    $username=$_POST('username');
    $email=$_POST('email');
    $tempPass=$_POST('password');
    $password=password_hash(password: $tempPass,algo: PASSWORD_DEAFULT);

    if(empty($name)) || empty($surname)|| empty($username)|| empty($email)|| empty($password){
        echo 'you need to fill all the fields';
    }else{
        $sql = 'SELECT username FROM users WHERE username=:username';

        $tempSQL=$conn->prepare(query: $sql);
        $tempSQL->bindParam(param: ':username', var &$username);
        $tempSQL->execute();
       }
}