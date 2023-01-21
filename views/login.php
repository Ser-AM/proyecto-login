<div class="container">
  <h1>Login</h1>
  <form id='login-form' method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <div id="username-error" class="error-message"></div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <div id="password-error" class="error-message"></div>
    <input id="login-button" type="submit" value="Login">
  </form> 
  <a href="#" class="link-cambio-vista" data-view="signup">Registrarse</a>
</div>
<script>
  validarUsername();
  validarPassword();
</script>