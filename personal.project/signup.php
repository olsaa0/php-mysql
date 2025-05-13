<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management - Sign Up</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3G4wL6fK3g8-ggGx3EX8vTh1gD4r5Bfwr0Yo+5Fs9tgb9QsV2wGJ5+59t" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="signup-container">
        <h2 class="text-center">Library Membership Sign-Up</h2>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your full name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required placeholder="Enter your address"></textarea>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Create a password">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" required placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybYz7XkzBxEr7yyd5fM+5o+4q+J78h9gU0hHqgHpzt+J5J6n+X" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0R9W6+Yx9W0csdRmg6b+08w+H7g40yIT7hdM8C9G+XfUurP6" crossorigin="anonymous"></script>
</body>
</html>

<style>
body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Signup container styling */
.signup-container {
    max-width: 500px;
    margin: 50px auto;
    background-color: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Title Styling */
.signup-container h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
}

/* Form styling */
.signup-container form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Input field and textarea styling */
.form-control {
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
}

.form-control:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
}

/* Button styling */
.btn-primary {
    background-color: #4CAF50;
    border-color: #4CAF50;
    color: white;
    padding: 12px;
    font-size: 16px;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #45a049;
    border-color: #45a049;
}

/* Responsive Design */
@media (max-width: 576px) {
    .signup-container {
        padding: 20px;
        width: 90%;
    }

    .signup-container h2 {
        font-size: 20px;
    }

    .btn-primary {
        font-size: 14px;
        padding: 10px;
    }
}
</style>