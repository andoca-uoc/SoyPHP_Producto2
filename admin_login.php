<?php

require  'conexion.php';

session_start();

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $cons = $connection->prepare('SELECT username,name,email,password FROM users_admin WHERE email=:email');
    $cons->bindParam(':email', $_POST['email']);
    $cons->execute();
    $results = $cons->fetch(PDO::FETCH_ASSOC);

    if(count($results) > 0 && ($_POST['password'] == $results['password'])){
        $_SESSION['username'] = $results['username'];
        header('Location: panel_admin.php');
    } else {
        $message = 'El usuario y/o contraseña son incorrectos';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Ángel Doña Cazalla">
    <meta name="description" content="Página de inicio de la App">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>App Notas</title>
</head>
<body>
<header>
    <nav>
        <h1>Acceso Web</h1>
    </nav>
</header>
<div class="container">
    <h2>Introduce tus credenciales de administrador</h2>
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
        <li><a href=""><u>¿No estás dado de alta?</u></a></li>

    </ul>

</div>



</body>
<footer>
    <hr>
    <p>copyright</p></p>
</footer>
</html>