<?php 
   include_once('config.php');
   $sql = "SELECT * FROM books";
   $selectMovies = $conn->prepare($sql);
   $selectMovies->execute();
   $books_data = $selectMovies->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <meta name="theme-color" content="#7952b3">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .navbar-dark {
      background-color: #343a40;
    }

    .navbar-brand svg {
      margin-right: 8px;
    }

    .fw-light {
      font-size: 3rem;
      font-weight: 700;
    }

    .lead {
      font-size: 1.2rem;
    }

    .card {
      border: none;
      border-radius: 15px;
      transition: all 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }

    .card img {
      height: 350px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .card-body h4 {
      font-weight: 600;
    }

    .btn-group .btn {
      margin-right: 5px;
    }

    .text-muted {
      font-size: 0.85rem;
    }

    footer {
      background: #343a40;
      color: #fff;
      padding: 1.5rem 0;
      text-align: center;
      margin-top: 3rem;
    }
  </style>
</head>
<body>

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add your preferred books, manage your collection, and enjoy reading anytime.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
             stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <circle cx="12" cy="13" r="4"/>
        </svg>
        <strong>Library</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
              aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">*Library*</h1>
      <p class="lead text-muted">Add your preferred books to read and enjoy!</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Books</a>
        <a href="#" class="btn btn-outline-secondary my-2">Borrow</a>
      </p>
    </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

      <?php foreach ($books_data as $book_data) { ?>
        <div class="col">
          <div class="card h-100">
            <img src="image/<?php echo $book_data['book_image']; ?>" class="card-img-top" alt="Book Cover">
            <div class="card-body d-flex flex-column">
              <h4><?php echo $book_data['book_title']; ?></h4>
              <p class="card-text"><?php echo $book_data['book_desc']; ?></p>
              <div class="mt-auto">
                <div class="btn-group mb-2">
                  <a href="details.php?id=<?php echo $book_data['id']; ?>" class="btn btn-sm btn-outline-primary">View</a>
                  <a href="edit.php?id=<?php echo $book_data['id']; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-muted d-block">Genre: <?php echo $book_data['book_genre']; ?></small>
                <small class="text-muted">Published: <?php echo $book_data['year_published']; ?></small>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>

<footer>
  <div class="container">
    <p class="mb-0">© 2025 Library Web App. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
