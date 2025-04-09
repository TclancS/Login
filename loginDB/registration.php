<?php
include('config.php');
session_start();

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM usuarios WHERE EMAIL=:email");
    $query->binParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    if($query->rowCount() >0){ 
        $query = $connection->prepare("INSERT INTO usuarios(USERNAME, PASSWORD, EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->binParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();

    if($result){ 
        echo '<p class="success">Registro guardado!!</p>';
    }else{
        echo '<p class="error">Algo anda mal!!</p>';
    }
}
}

?>