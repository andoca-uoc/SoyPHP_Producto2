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
    <p> <?= $mensaje ?> </p>
<?php endif; ?>


<header>
    <h1>Acceso Web</h1>
</header>
<div class="container2h">
    <h2>Registrese como estudiante</h2>
</div>
<div class="container2b">
    <form class="form" action="student_signup.php" method="post">
        <label>usuario</label><br>
        <input type="text" name="username" placeholder="Introduce tu nombre de usuario"><br>
        <label>password</label><br>
        <input type="password" name="pass" placeholder="Introduce tu contraseña"><br>
        <label>e-mail</label><br>
        <input type="text" name="email" placeholder="Introduce tu Email"><br>
        <label>nombre</label><br>
        <input type="text" name="name" placeholder="Introduce tu nombre"><br>
        <label>apellidos</label><br>
        <input type="text" name="surname" placeholder="Introduce tus apellidos"><br>
        <label>nif</label><br>
        <input type="text" name="nif" placeholder="Introduce tu nif"><br>
        <label>teléfono</label><br>
        <input type="text" name="telephone" placeholder="Introduce tu número de teléfono"><br>

        <input class="submit" type="submit" value="Enviar"><br>


    </form>
</div>


</body>
<footer>
    <hr>
</footer>
</html>
