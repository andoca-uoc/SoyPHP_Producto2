<?php

include("config.php");
if (isset($_POST['class'])) {
    $name = $_POST['name'];
    $color = $_POST['color'];

    $query = "INSERT INTO class (name, color) VALUES ('$name', '$color')";
    $result = mysqli_query($con, $query);

    if(!$result) {
        die("Query failed");
    }
    $_SESSION['message']='Clase creada';
    header("Location: class_create.php");
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title> Crear curso </title>
    <meta charset="utf-8">
</head>
<body>

<header>
    <h1>Acceso Web</h1>
</header>
<nav>
    <ul>
        <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
    </ul>
</nav>
<div class="container2">
        <h1>Crear Curso</h1>
                <form action="course_create.php" method="post">
                        <h2>Información del curso</h2>

                        <label>Nombre</label><br>
                        <input type="text" name="name" placeholder="Escriba el nombre del curso"><br>

                        <label>Descripción</label><br>
                        <input type="text" name="description" placeholder="Descripción del curso">

                        <br><h2>Fecha del curso</h2>

                        <label>Fecha de inicio</label>
                        <input type="date" name="fecha_inicio">

                        <label>Fecha de fin</label>
                        <input type="date" name="fecha_fin">

                        </br><input class="submit" type="submit" value="Enviar">

                </form>
</div>
</body>
</html>
