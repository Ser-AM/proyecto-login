<div class="container">
  <?php echo("<h1>Login</h1>");?>
  <form id='login-form' method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input id="login-button" type="submit" value="Login" disabled>
  </form> 
  <a href="#" class="link-cambio-vista" data-view="signup">Registrarse</a>
  <div id="username-error" class="error-message"></div>
  <div id="password-error" class="error-message"></div>
  <div id='error-div' class="error-message"></div>
</div>
<script>
  validarUsername();
  validarPassword();
</script>