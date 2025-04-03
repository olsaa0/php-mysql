<?php
include_once("config.php")
if(empty($_session['username'])){
    header('Location: login.php')
}
$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();

$users_data = $selectUsers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th {
            padding: 10px 20px;
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a href="#" class="navbar-brand col-sm-3 col-md-2n mr-0">welcome, <i><?php echo $_SESSION['username'];?></i></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a href="logout.php" class="nav-link">Sign out</a>
    </li>
    </ul>
    </nav>

    <?php
    include_once('config.php');
    $sql = 'SELECT * FROM users';
    $getUsers = $connection->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();
    ?>
</body>
</html>