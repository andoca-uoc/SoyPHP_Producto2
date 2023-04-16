<?php
session_start();
include('config.php');
include('functions.php');

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $telephone = $_POST['telephone'];
    $nif = $_POST['nif'];

    if(!empty($username) && !empty($pass) && !is_numeric($username))
    {
        $id = random_num(11);
        $query = "INSERT INTO students (id,username,pass,email,name,surname,telephone,nif) values ('$id','$username','$pass','$email','$name','$surname','$telephone','$nif')";

        mysqli_query($con, $query);

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
<!-- Mostramos el mensaje creado anteriormente en caso de éxito o error -->
<?php if(!empty($mensaje)) : ?>
    <p id="s-exito"> <?= $mensaje ?> </p> <!-- Necesario usar la forma de <.?.= para mostrar el contenido de una variable -->
<?php endif; ?>


<header>
    <h1>Acceso Web</h1>
</header>
<div class="containersignup">
    <h2>Crear Alumno</h2>
    <form class="form" action="student_signup.php" method="post">
        <label>Nombre de usuario:</label>
        <input type="text" name="username" placeholder="Introduce tu nombre de usuario">
        <label>Password:</label>
        <input type="password" name="pass" placeholder="Introduce tu contraseña"><br>
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

        <input class="submit" type="submit" value="Enviar">

        </div>
    </form>
</div>


</body>
<footer>
    <hr>
    <p>copyright</p></p>
</footer>
</html>
