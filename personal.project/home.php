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

  <style>
    /* Only styling the top part (header + hero) for a cute look */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding-bottom: 60px; /* for footer spacing */
    }

    /* Navbar with gentle pastel dark */
    .navbar-dark {
      background-color: #6a89cc; /* soft periwinkle */
      box-shadow: 0 4px 8px rgba(106, 137, 204, 0.5);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: #fff;
      letter-spacing: 1.2px;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.2);
    }

    .navbar-toggler {
      border-color: #fceabb;
    }

    .navbar-toggler-icon {
      filter: invert(1);
    }

    /* Header collapse background */
    #navbarHeader {
      background: #a29bfe; /* lavender */
      color: #fff;
    }

    #navbarHeader h4 {
      font-weight: 700;
      letter-spacing: 1px;
    }

    #navbarHeader p, #navbarHeader ul li a {
      color: #f8f9fa;
      font-size: 0.95rem;
    }

    #navbarHeader ul li a:hover {
      text-decoration: underline;
      color: #ffeaa7;
    }

    /* Hero section */
    section.py-5 {
      background-color: #fefefe;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      margin: 2rem auto;
      max-width: 700px;
      padding: 3rem 2rem;
    }

    h1.fw-light {
      font-size: 3.5rem;
      font-weight: 900;
      color: #6a89cc;
      text-shadow: 1px 1px 3px rgba(106, 137, 204, 0.5);
    }

    p.lead {
      font-size: 1.3rem;
      color: #636e72;
      margin-bottom: 1.8rem;
    }

    .btn-primary {
      background-color: #81ecec;
      border-color: #55efc4;
      color: #2d3436;
      font-weight: 600;
      border-radius: 50px;
      padding: 0.6rem 2rem;
      box-shadow: 0 4px 8px rgba(129, 236, 236, 0.5);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #55efc4;
      border-color: #00b894;
      color: #fff;
      box-shadow: 0 6px 14px rgba(0, 184, 148, 0.7);
    }

    .btn-outline-secondary {
      border-radius: 50px;
      padding: 0.6rem 2rem;
      font-weight: 600;
      color: #636e72;
      border-color: #dfe6e9;
      transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
      background-color: #6c5ce7;
      color: #fff;
      border-color: #6c5ce7;
      box-shadow: 0 6px 12px rgba(108, 92, 231, 0.6);
    }
  </style>
</head>
<body>

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container py-4">
      <div class="row">
        <div class="col-sm-8 col-md-7">
          <h4 class="text-white">About</h4>
          <p>Add your preferred books, manage your collection, and enjoy reading anytime.</p>
        </div>
        <div class="col-sm-4 offset-md-1">
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

  <nav class="navbar navbar-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
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
  </nav>
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

<!-- ORIGINAL BOOKS ALBUM AND FOOTER BELOW WITHOUT CHANGES -->

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

      <?php foreach ($books_data as $book_data) { ?>
        <div class="col">
          <div class="card h-100">
            <img src="image/<?php echo htmlspecialchars($book_data['book_image']); ?>" class="card-img-top" alt="Book Cover">
            <div class="card-body d-flex flex-column">
              <h4><?php echo htmlspecialchars($book_data['book_title']); ?></h4>
              <p class="card-text"><?php echo htmlspecialchars($book_data['book_desc']); ?></p>
              <div class="mt-auto">
                <div class="btn-group mb-2">
                  <a href="details.php?id=<?php echo $book_data['id']; ?>" class="btn btn-sm btn-outline-primary">View</a>
                  <a href="edit.php?id=<?php echo $book_data['id']; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-muted d-block">Genre: <?php echo htmlspecialchars($book_data['book_genre']); ?></small>
                <small class="text-muted">Published: <?php echo htmlspecialchars($book_data['year_published']); ?></small>
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
