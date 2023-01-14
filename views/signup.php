<!DOCTYPE html>
<html>
  <?php $ruta_base = '../';?>
  <?php require_once "../assets/partials/head.php" ?>
  <body>
    <div class="container">
      <h1>Sign Up</h1>
      <form action="../models/signup_action.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <div id="username-error" class="error-message"></div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <div id="email-error" class="error-message"></div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <div id="password-error" class="error-message"></div>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <div id="confirm-password-error" class="error-message"></div>
        <input type="submit" value="Signup" disabled>
      </form> 
    </div>
  </body>
</html>

