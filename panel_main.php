<?php

session_start();

$_SESSION["username"] = "username";

$message = '';


if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['username'])){
    $sql = "INSERT INTO students (username,name,email,password) VALUES (:username, :name, :email, :password); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$_POST['password']);

    if ($stmt->execute()) {
        $message = "Usuario creado correctamente";
    } else {
        $message = "Usuario no creado";
    }

}
?>


