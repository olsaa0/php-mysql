<?php 
    session_start();
    include_once('config.php');

    if (empty($_SESSION['username'])) {
          header("Location: login.php");
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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
        }

        .navbar {
            background-color: #004d99;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.25rem;
            color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
            text-decoration: underline;
        }

        .sidebar {
            background-color: #343a40;
            color: white;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            color: #d1d1d1;
        }

        .sidebar .nav-link.active {
            color: #fff;
            background-color: #007bff;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .btn {
            color: white;
            background-color: #007bff;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        h2 {
            color: #007bff;
            font-weight: bold;
        }

        .update, .delete {
            color: #28a745;
            text-decoration: none;
            padding: 5px;
            border-radius: 5px;
        }

        .update:hover {
            background-color: #f1f1f1;
        }

        .delete {
            color: #dc3545;
        }

        .delete:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo "Welcome to dashboard ".$_SESSION['username']; ?></a>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            <span data-feather="file"></span> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">
                            <span data-feather="home"></span> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="books.php">
                            <span data-feather="file"></span> Books
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="borrowings.php">
                            <span></span> Borrowings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <h2>Users</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users_data as $user_data) { ?>
                            <tr>
                                <td><?php echo $user_data['id']; ?></td>
                                <td><?php echo $user_data['name']; ?></td>
                                <td><?php echo $user_data['username']; ?></td>
                                <td><?php echo $user_data['email']; ?></td>
                                <td><a href="editUsers.php?id=<?= $user_data['id'];?>" class="update">Update</a></td>
                                <td><a href="deleteUsers.php?id=<?= $user_data['id'];?>" class="delete">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<footer>
    <p>&copy; 2025 Your Company. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>

</body>
</html>
