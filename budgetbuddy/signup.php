
<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Budget Buddy Register</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="wrapper">
    <form method="POST" action="module/register.php">
      <h2>Register</h2>
      <div class="input-field">
        <input type="text" name="name" class="form-control" required>
        <label>Enter your name</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" class="form-control" required>
        <label>Enter your email</label>
        <?php if (isset($message['email'])): ?>
          <p class="error-message"><?php echo $message['email']; ?></p>
        <?php endif; ?>
      </div>
      <div class="input-field">
        <input type="password" name="password" class="form-control" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password" name="cpassword" class="form-control" required>
        <label>Confirm your password</label>
        <?php if (isset($message['password'])): ?>
          <p class="error-message"><?php echo $message['password']; ?></p>
        <?php endif; ?>
      </div>
      
      <button type="submit">Register</button>
      <input type="hidden" value="1" name="post">

      <div class="register">
        <p><a href="signin.php">Go Back</a></p>
      </div>


    </form>
  </div>
</body>
</html>

