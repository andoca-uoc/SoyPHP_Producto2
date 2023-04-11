<?php

session_start();
include 'conexion.php';

$username = 'root';
$password = '123456';
$database = 'producto2';
$connection = new PDO('mysql:host=localhost;dbname=wordpress16;',$username,$password);
$id = $_GET['id'];
$m = "SELECT * FROM students WHERE id = '$id'";
$modificar = $connection->query($m);
$dato = $modificar->fetch();
if(isset($_POST['editar'])){
    $id = $_POST['id'];
    $username = $_POST['mUsername'];
    $password = $_POST['mPassword'];
    $email = $_POST['mEmail'];
    $name = $_POST['mName'];
    $surname = $_POST['mSurname'];
    $telephone = $_POST['mTelephone'];
    $nif = $_POST['mNif'];
    $data = $_POST['mFecharegistro'];

    $actualiza = "UPDATE students SET username = '$username', password = '$password', email = '$email', name = '$name', surname = '$surname', telephone = '$telephone', nif = '$nif', data = '$data' WHERE id = '$id'";
    $actualizar = $connection->query($actualiza);
    header("location:tablaalumnos.php");
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title> Modificar perfíl </title>
    <meta charset="utf-8">
</head>
<body>
<header>
    <h1>Acceso Web</h1>
</header>
<div>
    <div>
        <a href="index.php" ><button class="button">Inicio</button></a>
        <a href="alumnos.php" ><button id="active" class="button">Alumno</button></a>

    </div>
</div>
<div class="container">
    <h2>Editar Alumno</h2>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
        <label>Usuario:</label>
        <input type="text"  name="mUsername" value="<?php echo $dato['username']; ?>" placeholder="Username" required>
        <label>Password:</label>
        <input type="text"  name="mPassword" value="<?php echo $dato['password']; ?>" placeholder="Password" required>
        <br><label>Email:</label>
        <input type="text"  name="mEmail" value="<?php echo $dato['email']; ?>" placeholder="Email" required>
        <label>Nombre:</label>
        <input type="text"  name="mName" value="<?php echo $dato['name']; ?>" placeholder="Nombre" required>
        <br><label>Apellido:</label>
        <input type="text"  name="mSurname" value="<?php echo $dato['surname']; ?>" placeholder="Apellido" required>
        <label>Telefono:</label>
        <input type="text"  name="mTelephone" value="<?php echo $dato['telephone']; ?>" placeholder="Telefono" required>
        <br><label>NIF:</label>
        <input type="text"  name="mNif" value="<?php echo $dato['nif']; ?>" placeholder="NIF" required>
        <input type="hidden"  name="mFecharegistro" value="<?php echo $dato['data']; ?>">
        <div class="enviar">
            <br><input class="submit" type="submit" name="editar" value="Modificar">
        </div>
    </form>
</div>
</body>
</html>

