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
<nav>
    <ul>
        <li><a class="boxnav" href="index.php">Home</a></li>
    </ul>
</nav>

<div class="container3">
    <h2>Datos personales</h2>
        <table  class="">
            <thead>
                <th>ID</th>
                <th>usuario</th>
                <th>e-mail</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>nif</th>
                <th>date_registered</th>
            </thead>
            <?php
            if ($students && $sentencia->rowCount() > 0) {
            foreach ($students as $fila) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['telephone']; ?></td>
                    <td><?php echo $row['nif']; ?></td>
                    <td><?php echo $row['date_registered']; ?></td>

                </tr>
                <?php
            }
            }
            ?>
        </table>
</div>



<div class="container2">
    <h3>Clases</h3>
    <ul>
        <li><a class="box" href="#">Crear</a></li>
        <li><a class="box" href="#">Modificar</a></li>
        <li><a class="box" href="#">Eliminar</a></li>
    </ul>
</div>
<div class="container2">
    <h3>Profesores</h3>
    <ul>
        <li><a class="box" href="#">Crear</a></li>
        <li><a class="box" href="#">Modificar</a></li>
        <li><a class="box" href="#">Eliminar</a></li>
    </ul>
    <a href="logout_student.php">Salir de la sesión</a>
</div>
</body>
</html>

