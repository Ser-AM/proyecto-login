<!DOCTYPE html>
<html>
  <?php require_once "./head.php" ?>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <div id="username-error"></div>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <div id="password-error"></div>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
      </form> 
    </div>
  </body>
</html>
