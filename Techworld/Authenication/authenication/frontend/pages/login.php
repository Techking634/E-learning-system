<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="frontend/assets/css/style.css">
</head>

<body>

  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <?php
    display_error('login', true);
    ?>
    <form method="POST" action="handle-form-submission">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <?php
        display_error('email');
        ?>
      </div>
      <div class="input-group password">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i id="eye" class="fa fa-eye"></i>
        <?php
        display_error('password')
        ?>
      </div>
      <input type="submit" class="btn" value="Sign In" name="signin">
    </form>


    <div class="links">
      <p>Don't have account yet?</p>
      <a href="register">Sign Up</a>
    </div>
  </div>
  <script src="fronted/assets/javascript/script.js"></script>
</body>

</html>