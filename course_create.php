<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $active = $_POST['active'];

    $query = "INSERT INTO courses (name, description, date_start, date_end, active) VALUES ('$name', '$description', '$date_start', '$date_end', '$active')";
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
<header class="admin-header">
    <h1>Crear un curso</h1>
    <nav>
        <ul>
            <li><a class="boxnav" href="index.php">Inicio</a></li>
            <li><a class="boxnav" href="panel_admin.php">Panel</a></li>
        </ul>
    </nav>
</header>
<div class="container2">
                <form action="course_create.php" method="POST">
                        <h2>Información del curso</h2>

                        <label>Nombre</label><br>
                        <input type="text" name="name" placeholder="Escriba el nombre del curso"><br>

                        <label>Descripción</label><br>
                        <input type="text" name="description" placeholder="Descripción del curso">
                        <br>
                        <label for="active">Activo</label><br>
                        <input type="" name="active" list="mySuggestion" />
                        <datalist id="mySuggestion">
                            <option>Sí</option>
                            <option>No</option>
                        </datalist>
                        <hr>
                        <h2>Fecha de inicio y fin del curso</h2>

                        <input type="date" name="date_start">

                        <input type="date" name="date_end">
                        <br><br>
                        <input class="submit" type="submit" value="Crear">

                </form>
</div>
</body>
</html>
