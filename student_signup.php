<?php

require_once 'conexion.php';

$message = '';

session_start();

if (!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['nif']) && !empty($_POST['telephone'])) {
    $sql = "INSERT INTO users (username,password,name,surname,email,nif,telephone) VALUES (:username,:password,:name,:surname:email,:nif,:telephone); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':pass', $_POST['pass']);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':surname', $_POST['surname']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':nif', $_POST['nif']);
    $stmt->bindParam(':telephone', $_POST['telephone']);

    if ($stmt->execute()) {
        $message = "Inserted Student";
    } else {
        $message = "Error! Try again!";
    }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Ángel Doña Cazalla">
    <meta name="description" content="Login para estudiantes">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>App Notas</title>
</head>
<body>
<header>
    <h1>Acceso Web</h1>
</header>
<div class="containersignup">
    <h2>Crear Alumno</h2>
    <form class="form" action="student_signup.php" method="post">
        <label>Nombre de usuario:</label>
        <input type="text" name="username" placeholder="Introduce tu nombre de usuario">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Introduce tu contraseña"><br>
        <label>Email:</label>
        <input type="text" name="email" placeholder="Introduce tu Email"><br>
        <label>Nombre:</label>
        <input type="text" name="name" placeholder="Introduce tu nombre">
        <label>Apellidos:</label>
        <input type="text" name="surname" placeholder="Introduce tu apellido"><br>
        <label>nif:</label>
        <input type="text" name="nif" placeholder="Introduce tu nif">
        <label>Teléfono:</label>
        <input type="text" name="telephone" placeholder="Introduce tu número de teléfono"><br>

        <div class="enviar">
            </br><input class="submit" type="submit" value="Enviar">
        </div>
    </form>
</div>


</body>
<footer>
    <hr>
    <p>copyright</p></p>
</footer>
</html>
