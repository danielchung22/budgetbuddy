<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Budget Buddy Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <div class="wrapper">
  <form method="POST" action="module/login.php">
      <h2>Login</h2>
        <div class="input-field">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="ibrahim@hello.com">
        <label>Enter your email</label>
      </div>
      <div class="input-field">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="1234">
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <input type="hidden" value="1" name="post">
      <div class="register">
        <p>Don't have an account? <a href="signup.php">Register</a></p>
      </div>
    </form>
  </div>
</body>

</html>