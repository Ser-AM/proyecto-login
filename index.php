<!DOCTYPE html>
<html>
    <?php $ruta_base = './';?>
    <?php require_once "./assets/partials/head.php" ?>
    <body>
        <div class="container">
            <h1>Proyecto Login</h1>
            <p>Para comenzar, elige una de las siguientes opciones:</p>
            <button class="todo" onclick="location.href='/views/login.php'">Iniciar sesión</button>
            <button class="todo" onclick="location.href='/views/signup.php'">Registrarse</button>
        </div>
    </body>
</html>