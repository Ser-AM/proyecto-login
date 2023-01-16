<?php
    require_once '../includes/conexion.php';

    // Recibir los datos del formulario de inicio de sesión
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Inicializar un array de errores
    $errors = array();

    // Validar los datos
    if (empty($username)) {
        array_push($errors, "El nombre de usuario es requerido");
    }
    if (empty($password)) {
        array_push($errors, "La contraseña es requerida");
    }

    // Comprobar si el usuario existe en la base de datos
    $user_check_query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    // Si no hay errores y el usuario existe, iniciar sesión
    if (count($errors) == 0 && $user) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../views/welcome.php");
    } else {
        array_push($errors, "El nombre de usuario o la contraseña son incorrectos");
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }
?>
