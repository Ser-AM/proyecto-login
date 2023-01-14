<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="<?php echo $ruta_base; ?>assets/img/favicon.png">
    <!--<link rel="stylesheet" href="./assets/css/style.css">-->
    <link rel="stylesheet" href="<?php echo $ruta_base; ?>assets/css/style.css">
    <script src="<?php echo $ruta_base; ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $ruta_base; ?>assets/js/script.js"></script>
    <?php
        $url = $_SERVER['REQUEST_URI'];
        $title = '';
        switch ($url) {
            case '/login.php': $title = 'Login'; break;
            case '/signup.php': $title = 'Registro'; break;
            case '/welcome.php': $title = 'Bienvenido'; break;
            default: $title = 'Proyecto-Login'; break;
          }     
    ?>
    <title><?php echo $title; ?></title>
</head>