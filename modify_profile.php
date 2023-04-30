<?php

session_start();
include 'config.php';

$id = $_GET['id'];
$q = "SELECT * FROM students WHERE id = '$id'";
$modificar = $con->query($q);
$dato = $modificar->fetch();
if(isset($_POST['editar'])){
    $id = $_POST['id'];
    $username = $_POST['mUsername'];
    $pass = $_POST['mPass'];
    $email = $_POST['mEmail'];
    $name = $_POST['mName'];
    $surname = $_POST['mSurname'];
    $telephone = $_POST['mTelephone'];
    $nif = $_POST['mNif'];
    $date_registered = $_POST['mDate_registered'];

    $actualiza = "UPDATE students SET username = '$username', pass = '$pass', email = '$email', name = '$name', surname = '$surname', telephone = '$telephone', nif = '$nif', date_registered = '$date_registered' WHERE id = '$id'";
    $actualizar = $con->query($actualiza);
    header("location:panel_students.php");
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
        <a href="panel_student.php" ><button id="active" class="button">Alumno</button></a>
    </div>
</div>
<div class="container">
    <h2>Editar Alumno</h2>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
        <label>Usuario</label>
        <input type="text"  name="mUsername" value="<?php echo $dato['username']; ?>" placeholder="Username" required>
        <label>Password</label>
        <input type="text"  name="mPassword" value="<?php echo $dato['password']; ?>" placeholder="Password" required>
        <br><label>Email</label>
        <input type="text"  name="mEmail" value="<?php echo $dato['email']; ?>" placeholder="Email" required>
        <label>Nombre</label>
        <input type="text"  name="mName" value="<?php echo $dato['name']; ?>" placeholder="Nombre" required>
        <br><label>Apellido</label>
        <input type="text"  name="mSurname" value="<?php echo $dato['surname']; ?>" placeholder="Apellido" required>
        <label>Telefono</label>
        <input type="text"  name="mTelephone" value="<?php echo $dato['telephone']; ?>" placeholder="Telefono" required>
        <br><label>NIF</label>
        <input type="text"  name="mNif" value="<?php echo $dato['nif']; ?>" placeholder="NIF" required>
        <input type="hidden"  name="mDate_registered" value="<?php echo $date_registered['date_registered']; ?>">
        <div class="enviar">
            <br><input class="submit" type="submit" name="editar" value="Modificar">
        </div>
    </form>
</div>
</body>
</html>

