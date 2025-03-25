<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="signup">
		
        <form class="form-signin" action="register.php" method="post">
            
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
    
            <label for="inputEmail" class="sr-only">Name</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required autofocus>
    
            <label for="inputEmail" class="sr-only">Surname</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Surname" name="surname" required autofocus>
    
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
            
    
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
    
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
    
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
    
            <small>Already have account? <a href="login.php">Log In</a></small>
    
            <p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>