<?php
    // Recibir la petición
    $view = $_POST['view'];
    // Validar la petición
    if(empty($view)){
        echo "Error: No se ha especificado una vista";
        exit();
    }

    // Procesar la petición
    switch ($view) {
        case 'welcome':
            $data = array(
                'title' => 'Bienvenido',
                'message' => 'Hola, bienvenido al sistema'
            );
            break;
        case 'login':
            $data = array(
                'title' => 'Login',
                'message' => 'Aquí puedes registrarte'
            );
            break;
        case 'signup':
            $data = array(
                'title' => 'Signup',
                'message' => 'Aquí puedes registrarte'
            );
            break;
        default:
            echo "Error: La vista especificada no existe";
            exit();
    }

    // Devolver la vista
    include '../views/' . $view . '.php';

?>
