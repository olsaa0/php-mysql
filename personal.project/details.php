<?php 
  session_start();
  include_once('config.php');

  $id = $_GET['id'];
  $_SESSION['book_id'] = $id;

  $sql = "SELECT * FROM books WHERE id=:id";
  $selectBook = $conn->prepare($sql);
  $selectBook->bindParam(":id", $id);
  $selectBook->execute();
  $book_data = $selectBook->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Borrow Book - <?php echo htmlspecialchars($book_data['book_title']); ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header .navbar {
      background-color: #343a40;
    }

    header .navbar-brand strong {
      color: #ffc107;
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: 1px;
    }

    .borrow-section {
      max-width: 900px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.1);
    }

    .book-image {
      width: 100%;
      max-width: 350px;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgb(0 0 0 / 0.1);
      object-fit: cover;
    }

    h3.book-title {
      font-weight: 700;
      color: #343a40;
      margin-bottom: 15px;
    }

    p.book-desc {
      font-size: 1.05rem;
      color: #6c757d;
      margin-bottom: 30px;
    }

    label {
      font-weight: 600;
      color: #495057;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      font-weight: 700;
      font-size: 1.1rem;
      padding: 12px;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    /* Floating labels style tweaks */
    .form-floating > label {
      padding-left: 0.75rem;
      color: #6c757d;
      font-weight: 500;
    }

    /* Select inside form-floating fix */
    .form-floating select.form-select {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem;
      height: calc(3.5rem + 2px);
    }
  </style>
</head>
<body>

<header>
  <nav class="navbar navbar-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="me-2" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <circle cx="12" cy="13" r="4"/>
        </svg>
        <strong>Borrow</strong>
      </a>
    </div>
  </nav>
</header>

<section class="text-center mt-5 mb-4">
  <div class="container">
    <h1 class="display-5 fw-bold text-secondary">Borrow a Book</h1>
    <p class="lead text-muted">Reserve your favorite book by filling the form below.</p>
  </div>
</section>

<div class="borrow-section shadow-sm">
  <div class="row g-4 align-items-center">
    <div class="col-md-5 text-center">
      <img src="movie_images/<?php echo htmlspecialchars($book_data['book_image']); ?>" alt="Book Image" class="book-image" />
    </div>
    <div class="col-md-7">
      <h3 class="book-title"><?php echo htmlspecialchars($book_data['book_title']); ?></h3>
      <p class="book-desc"><?php echo htmlspecialchars($book_data['book_desc']); ?></p>

      <form action="borrowing.php" method="post" novalidate>
        <div class="form-floating mb-3">
          <input type="date" class="form-control" id="borrowDate" name="borrow_date" required />
          <label for="borrowDate">Borrow Date</label>
          <div class="invalid-feedback">Please select a borrow date.</div>
        </div>

        <div class="form-floating mb-3">
          <input type="date" class="form-control" id="returnDate" name="return_date" required />
          <label for="returnDate">Return Date</label>
          <div class="invalid-feedback">Please select a return date.</div>
        </div>

        <div class="form-floating mb-4">
          <select class="form-select" id="borrowTime" name="time" required>
            <option value="" disabled selected>Select Time</option>
            <option value="12:00">12:00</option>
            <option value="15:00">15:00</option>
            <option value="17:00">17:00</option>
            <option value="19:00">19:00</option>
          </select>
          <label for="borrowTime">Borrow Time</label>
          <div class="invalid-feedback">Please select a time.</div>
        </div>

        <button class="btn btn-primary w-100 btn-lg" type="submit" name="submit">Borrow Now</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS & validation script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Bootstrap validation
  (() => {
    'use strict'
    const forms = document.querySelectorAll('form')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>

</body>
</html>
