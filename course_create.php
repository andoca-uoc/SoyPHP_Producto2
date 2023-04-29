<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $active = $_POST['active'];

    $query = "INSERT INTO course (name, description, date_start, date_end, active) VALUES ('$name', '$description', '$date_start', '$date_end', '$active')";
    $result = mysqli_query($con, $query);

    if(!$result) {
        die("Query failed");
    }
    $_SESSION['message']='Course creada';
    header("Location: course_create.php");
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
                <form action="course_create.php" method="POST">
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
