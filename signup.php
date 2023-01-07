<!DOCTYPE html>
<html>
  <?php require_once "./head.php" ?>
  <body>
    <div class="container">
      <h1>Sign Up</h1>
      <form action="signup.php" method="post">
        <div id="username-error"></div>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <div id="email-error"></div>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <div id="password-error"></div>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <div id="confirm-password-error"></div>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Signup" disabled>
      </form> 
    </div>
  </body>
</html>
