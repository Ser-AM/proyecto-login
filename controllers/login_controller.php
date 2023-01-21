<?php
    require_once '../includes/conexion.php';

    // Recibir los datos del formulario de inicio de sesión
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Inicializar un array de errores
    $errors = array();

    // Validar los datos
    if (empty($username)) {array_push($errors, "El nombre de usuario es requerido");}
    if (empty($password)) {array_push($errors, "La contraseña es requerida");}

    // Comprobar si el usuario existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // Si no hay errores y el usuario existe, iniciar sesión
    if($user){
        if(($user['username'] === $username) && /* password_verify($password, $user['password']) */($user['password'] === $password)){
            //Iniciar sesión
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;

            //Enviar petición ajax para cargar la vista de bienvenida
            echo json_encode(array("status" => "success", "view" => "welcome"));
        }
    } else {
        array_push($errors, "Nombre de usuario o contraseña incorrecta");
        //Si no hay errores, mostrar mensaje de error
        if(count($errors) > 0){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        }
    }
?>