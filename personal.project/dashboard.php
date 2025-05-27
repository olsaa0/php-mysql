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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <style>
        /* General body and font */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
            color: #344054;
        }

        /* Navbar styling */
        header.navbar {
            background: linear-gradient(90deg, #4f46e5, #3b82f6);
            box-shadow: 0 4px 12px rgb(59 130 246 / 0.3);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            color: white !important;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            color: #e0e7ff;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #c7d2fe;
            text-decoration: underline;
        }

        /* Sidebar */
        .sidebar {
            background-color: #1e293b;
            min-height: 100vh;
            color: #cbd5e1;
            box-shadow: 2px 0 8px rgba(30, 41, 59, 0.7);
            padding-top: 2rem;
        }

        .sidebar .nav-link {
            color: #cbd5e1;
            font-weight: 500;
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #3b82f6;
            color: white !important;
        }

        /* Main content */
        main {
            padding: 2.5rem 2rem;
            background-color: #fff;
            border-radius: 1rem 0 0 1rem;
            min-height: 90vh;
            box-shadow: 0 8px 24px rgb(0 0 0 / 0.1);
        }

        h1.h2 {
            color: #1e40af;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: 0.05em;
        }

        h2 {
            color: #2563eb;
            font-weight: 700;
            margin-bottom: 1rem;
            border-bottom: 2px solid #60a5fa;
            padding-bottom: 0.3rem;
            letter-spacing: 0.05em;
        }

        /* Table styling */
        table.table {
            border-collapse: separate !important;
            border-spacing: 0 0.75rem;
        }

        table.table thead tr th {
            background-color: #2563eb;
            color: white;
            border-radius: 0.5rem;
            padding: 0.8rem 1rem;
            border: none !important;
            font-weight: 600;
            text-align: center;
        }

        table.table tbody tr {
            background: #f9fbff;
            box-shadow: 0 2px 6px rgb(37 99 235 / 0.15);
            border-radius: 0.75rem;
        }

        table.table tbody tr td {
            vertical-align: middle;
            padding: 0.85rem 1.25rem;
            color: #475569;
            font-weight: 500;
            text-align: center;
            border: none !important;
        }

        /* Buttons styling */
        a.update, a.delete {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 0.5rem;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s ease;
            user-select: none;
            font-size: 0.9rem;
        }

        a.update {
            color: #16a34a; /* green-600 */
            border: 1.5px solid #16a34a;
        }

        a.update:hover {
            background-color: #bbf7d0; /* green-100 */
            color: #15803d;
        }

        a.delete {
            color: #dc2626; /* red-600 */
            border: 1.5px solid #dc2626;
        }

        a.delete:hover {
            background-color: #fecaca; /* red-100 */
            color: #b91c1c;
        }

        /* Footer */
        footer {
            background-color: #1e293b;
            color: #cbd5e1;
            text-align: center;
            padding: 12px 1rem;
            font-size: 0.9rem;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -3px 10px rgb(30 41 59 / 0.7);
            user-select: none;
        }

        /* Responsive tweaks */
        @media (max-width: 767px) {
            main {
                border-radius: 0;
                box-shadow: none;
                padding: 1.5rem 1rem;
            }
            .sidebar {
                min-height: auto;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>

<header class="navbar navbar-dark sticky-top p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        <?php echo "Welcome to dashboard " . htmlspecialchars($_SESSION['username']); ?>
    </a>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
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
                        <span data-feather="book"></span> Borrowings
                    </a>
                </li>
            </ul>
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
                                <td><?php echo htmlspecialchars($user_data['id']); ?></td>
                                <td><?php echo htmlspecialchars($user_data['name']); ?></td>
                                <td><?php echo htmlspecialchars($user_data['username']); ?></td>
                                <td><?php echo htmlspecialchars($user_data['email']); ?></td>
                                <td><a href="editUsers.php?id=<?= htmlspecialchars($user_data['id']);?>" class="update">Update</a></td>
                                <td><a href="deleteUsers.php?id=<?= htmlspecialchars($user_data['id']);?>" class="delete">Delete</a></td>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="dashboard.js"></script>

<script>
    // Activate feather icons
    feather.replace()
</script>

</body>
</html>
