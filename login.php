<!DOCTYPE html>
<html>
  <?php require_once "./head.php" ?>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <div id="username-error" class="error-message"></div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <div id="password-error" class="error-message"></div>
        <input type="submit" value="Login">
      </form> 
    </div>
  </body>
</html>
