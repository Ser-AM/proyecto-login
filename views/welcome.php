<?php 
session_start();
if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <?php $ruta_base = '../';?>
    <?php require_once "../assets/partials/head.php" ?>
    <body>
        <h1>Bienvenido</h1>
        <a href="../controllers/logout.php">Logout</a>
        <br>
        <h2> Estás dentro. <?php echo $_SESSION['username']; ?></h2>
        <br>
        <h3> Siguientes pasos:</h3>
        <br>
        <h4>Login controller. Con validación</h4>
        <h4>Cierres de conexion</h4>
        <h4>Empezar a ver validaciones que protejan de inyecciones sql</h4>
        <h4>mejorar conexion haciendola mediante clase (entender antes más en profundidad)</h4>
        <h4>Sesiones</h4>
        <h4>.htaccess</h4>
        <h4>Ajax? no me gusta que me mande a otra pagina si falla la validacion php en el controller</h4>
        <h4></h4>
    </body>
</html>