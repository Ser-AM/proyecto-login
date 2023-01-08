<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
    <?php
        $url = $_SERVER['REQUEST_URI'];
        $title = '';
        switch ($url) {
            case '/login.php': $title = 'Login'; break;
            case '/signupphp': $title = 'Registro'; break;
            default: $title = 'Aplicación de tareas pendientes'; break;
          }     
    ?>
    <title><?php echo $title; ?></title>
</head>