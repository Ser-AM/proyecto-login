<?php
    function insert_user($conn, $username, $password, $email){
        $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: ../views/welcome.php");
        }else{
            echo "Ha ocurrido un error al insertar el usuario";
        }
    }
?>
