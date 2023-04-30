<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $nif = $_POST['nif'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    $query = "INSERT INTO teachers (name, surname, nif, telephone, email) VALUES ('$name', '$surname', '$nif', '$telephone', '$email')";
    $result = mysqli_query($con, $query);

    if(!$result) {
        die("Query failed");
    }
    $_SESSION['message']='teacher creada';
    header("Location: teacher_create.php");
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title> Crear profesor </title>
    <meta charset="utf-8">
</head>
<body>
<header class="admin-header">
    <h1>Creación de un profesor</h1>
    <nav>
        <ul>
            <li><a class="boxnav" href="index.php">Inicio</a></li>
            <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
        </ul>
    </nav>
</header>
<div class="container2">
                <h2>Introduce los datos del nuevo profesor</h2>
                <form class="form" action="teacher_create.php" method="POST">
                    <label>Nombre:</label><br>
                    <input type="text" name="name" placeholder="Introduce el nombre del profesor"><br>
                    <label>Apellido:</label><br>
                    <input type="text" name="surname" placeholder="Introduce el apellido"><br>
                    <label>NIF:</label><br>
                    <input type="text" name="nif" placeholder="Introduce el NIF"><br>
                    <label>Teléfono</label><br>
                    <input type="text" name="telephone" placeholder="Introduce el teléfono"><br>
                    <label>Email</label><br>
                    <input type="text" name="email" placeholder="Introduce el email">

                    <div class="enviar">
                        </br><input class="submit" type="submit" value="Enviar">
                    </div>
                </form>
</div>
</body>
</html>

