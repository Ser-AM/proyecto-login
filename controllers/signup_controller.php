<?php
    require_once '../includes/conexion.php';
    require_once '../models/signup_model.php';

    //Recibir parametros
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //Inicializar un array de errores
    $errors = array();

    //Validar datos
    if(empty($username)){
        array_push($errors, "El nombre de usuario es requerido");
    }
    if(empty($email)){
        array_push($errors, "El email es requerido");
    }
    if(empty($password)){
        array_push($errors, "La contraseña es requerida");
    }
    if($password != $confirm_password){
        array_push($errors, "Las contraseñas no coinciden");
    }
    if(strlen($password) < 8){
        array_push($errors, "La contraseña debe tener al menos 8 caracteres");
    }

    //Comprobar si el email ya existe en la base de datos
    $email_check_query = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        if($user['email'] === $email){
            array_push($errors, "El correo ya esta en uso");
        }
    }

    //Comprobar si el nombre de usuario ya existe en la base de datos
    $username_check_query = "SELECT * FROM usuarios WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $username_check_query);
    $user = mysqli_fetch_assoc($result);
    if($user){
        if($user['username'] === $username){
            array_push($errors, "El nombre de usuario ya esta en uso");
        }
    }

    //Si no hay errores inerta el registro en la base de datos
    if(count($errors) == 0){
        insert_user($conn, $username, $password, $email);
    }else{
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }
?>
