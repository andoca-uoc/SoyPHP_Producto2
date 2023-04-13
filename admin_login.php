<?php

require  'config.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //username y password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id_user_admin FROM users_admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['id_user_admin'] = $myusername;

        header("location: panel_admin.php");
    } else {
        $error = "Tu login o password es incorrecto";
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