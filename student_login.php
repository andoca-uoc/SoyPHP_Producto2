<?php

require 'conexion.php';

$message = '';

if(!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $sql = "INSERT INTO students (username,name,email,password) VALUES (:username, :name, :email, :password); ";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$_POST['password']);

    header("location:login.php");

    if ($stmt->execute()) {
        $message = "Alumno creado correctamente";
    } else {
        $message = "Alumno no creado";
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
<div class="container">
    <h2>Introduce tus credenciales de estudiante</h2>
    <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <form class="form" action="login.php" method="post">
        <label>Usuario:</label><br>
        <input type="text" name="email" placeholder="Introduce tu Email"><br>
        <!-- -->
        <label>Contraseña:</label><br>
        <input type="password" name="password" placeholder="Introduce tu contraseña"></br>
        <!-- -->
        <input class="submit" type="submit" value="Entra"><br>
    </form>

    <ul>
        <li><a href=""><u>¿Aún no eres alumno?</u></a></li>

    </ul>

</div>
</body>
<footer>
    <hr>
    <p>copyright</p></p>
</footer>
</html>
