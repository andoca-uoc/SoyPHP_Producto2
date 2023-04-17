<?php
session_start();
include('config.php');
include('functions.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($email) && !is_numeric($username))
    {
        $id_user_admin = mt_rand(1, 100);
        $query = "INSERT INTO users_admin (id_user_admin,username,name,email,password) values ('$id_user_admin','$username','$name','$email','$password')";

        mysqli_query($con, $query);

        $mensaje = "Registrado con éxito";

    } else
    {
        echo "Please enter some valid information!";
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
<div class="container2b">
    <h2>Registrese como administrador</h2>
    <form class="form" action="admin_signup.php" method="post">
        <label>Nombre de usuario</label><br>
        <input type="text" name="username" placeholder="Introduce tu nombre de usuario"><br>
        <label>Nombre</label><br>
        <input type="text" name="name" placeholder="Introduce tu nombre"><br>
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="Introduce tu Email"><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Introduce tu contraseña"><br>

        <input class="submit" type="submit" value="Enviar">


<!-- Mostramos el mensaje creado anteriormente en caso de éxito o error -->
<?php if(!empty($mensaje)) : ?>
    <p> <?= $mensaje ?> </p> <!-- Necesario usar la forma de <.?.= para mostrar el contenido de una variable -->
<?php endif; ?>

</form>
</div>


</body>
<footer>
    <hr>
</footer>
</html>
