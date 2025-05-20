<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management - Sign Up</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(to right, #94B4C1, #547792);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .signup-container {
            max-width: 500px;
            margin: 80px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .signup-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 15px;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #ECEFCA;
            box-shadow: 0 0 6px #213448;
        }

        .btn-primary {
            background-color: #213448;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #547792;
        }

        @media (max-width: 576px) {
            .signup-container {
                padding: 25px;
                margin: 40px 20px;
            }

            .signup-container h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="signup-container">
        
        <h2>Library Sign-in</h2>
        <img  src="image/logo.jpg" alt="" width="72" height="57">
        <form action="loginLogic.php" method="post">
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
	<p>Already have an account:<a href="signup.php" >Sign up</a> </p>
  </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
