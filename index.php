<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="<?php echo $ruta_base; ?>assets/img/favicon.png">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title id='title'>Inicio</title>
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <?php session_start(); ?>
        <?php include_once "./assets/partials/header.php"; ?>
        <div id="contenido" class="container">
            <?php 
                if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                    include_once "./views/login.php";
                }else{
                    include_once "./views/welcome.php";
                }
            ?>
        </div>
    </body>
</html>